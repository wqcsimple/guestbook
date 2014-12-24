<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	*系统--- 公用模型		
	*
	*@since 2014.12.12
	*/
class Common_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();//如果载config/autoload.php已经已经自动加载了database就可以不用写
	}
     	/**
     	* 新增信息
     	* @param string $table  表名称
     	* @param array  $param  数据变量
     	* @return INT ID 
	*/
	public function add($table = '',$param = array()){
		if(empty($table) || !is_array($param)){
			return FALSE;	
		}
		//写入数据表
		$this->db->insert($table,$param);
		
		//返回记录ID
		return $this-db->insert_id();
	}	

	/**
     	* 更新分类信息
     	* @param string    $table      表名称
     	* @param string    $primary    表主键
     	* @param int       $id         分类ID
     	* @param array     $param      更新的数据
     	* @return type 
     	*/
	public function update($table = '', $primary = '',$id = 0,$param = array()){
		if(empty($table) || empty($table) || empty($id) || empty($param)){
			return FALSE;
		}
		$id = intval($id);
		$this->db->where($primary,$id)
			 ->limit(1)
			 ->update($table,$param);
		return $this->db->affected_rows();
	}

	/**
     	* 删除指定ID记录
     	* @param string    $table      表名称
     	* @param string    $primary    表主键
     	* @param array     $id         分类ID
     	* @return int
     	*/
	public function delete($table ='', $primary ='', $id = array()){
		if(empty($table) || empty($primary) || empty($id)){
			return FALSE;
		}
		
		$this->db->where_in($primary,$id)
			 ->delete($table);

		return $this->db->affected_rows();
	}

	/**
     	* 多字段条件查询数据     
    	* @param string    $table      表名称
     	* @param array     $param      查询条件：
     	*                                  array($key => $val) $key为要操作的字段，$val为要操作的值
     	* @param int       $limit      数据数目
     	* @param int       $offset     开始位置
     	* @param string    $show_field 要显示字段
     	* @param array     $order      排序条件：   
     	*                                  array($key => $val)
     	*                                  $key为排序依据的字段，
     	*                                  $val为排序的方式【asc (升序，默认)或 desc(降序), 或 random(随机)】                             
     	* @return array|boolean 
     	*/
	public function search($table ='', $param = array(), $limit = null, $offset = null, $show_field = '*', $order = array()){
		if(empty($table)){
			return FALSE;
		}
		
		$this->db->select($show_field);
		
		if(is_array($param) && count($param) > 0){
			foreach($param as $key => $val){
				if(!empty($key)){
					$this->db->where($key,$val);
				}
			}
		}
	
		if(!empty($order) && is_array($order)){
			foreach($order as $key => $val){
				$this->db->order_by($key,$val);
			}
		}
		
		if(is_numeric($limit)){
			$limit = intval($limit);
		}else{
			$limit = null;
		}

		if( is_numeric($offset)){
			$offset = intval($offset);
		}else{
			$offset = null;
		}

		$query = $this->db->get($table,$limit,$offset);
		return $query->num_rows >0 ? $query->result_object() : FALSE;
		
		return FALSE;
	}

	/**
    	* 获取表的主键
    	* @param string    $database   数据库名称
     	* @param strting   $table      表名称
     	*/	
	public function getPrimary($database = '', $table = ''){
		if(empty($database) || empty($table)){
			return FALSE;
		}
		
		 $this->db->select('c.COLUMN_NAME')
                 	  ->from('INFORMATION_SCHEMA.TABLE_CONSTRAINTS AS t')
                 	  ->join('INFORMATION_SCHEMA.KEY_COLUMN_USAGE AS c', 't.TABLE_NAME = c.TABLE_NAME' , 'left')
                 	  ->where('t.TABLE_SCHEMA', $database)
                 	  ->where('t.TABLE_NAME',  $table)
                 	  ->where('t.CONSTRAINT_TYPE', 'PRIMARY KEY');

        	$query = $this->db->get();
        	return $query->result_object();
	}


	/**
     	* 分页数据查询
     	* 功能：
     	* 一、查询条件分页总数
     	* 二、查询条件分页数据信息
     	* @param string $table      表名称
     	* @param array  $param      查询条件：  
     	*                                  array($key => $val) $key为要操作的字段，$val为要操作的值
	*				   需要设置的值:limit page
     	* @param string $type       为total返回总数,range为返回对应数据 
     	* @param string $show_field 为需要查询的字段 
     	* @param array  $order      排序条件：   
     	*                                  array($key => $val)
     	*                                  $key为排序依据的字段，
     	*                                  $val为排序的方式【asc (升序，默认)或 desc(降序), 或 random(随机)】 
     	* @return int 或 array 
     	*/
	public function pageData($table ='', $param = array(), $type = 'total', $show_field = '*', $order = array()){
		if(empty($table)){
			return FALSE;
		}
		
		$limit = intval($paramp['limit']);
		$page  = intval($param['page']); //开始查询的ID，在CI分页中
		
		$not_table_column_arr = array('limit','page');
		
		//处理查询条件的组合
		if(!empty($param) && is_array($param)){
			foreach($param as $key => $val){
				if(!empty($val) && ($val != 'n') && !in_array($key,$not_table_column_arr)){
					$this->db->where($key,$val);
				}
			}
		}
		
		//排序规则的组合
		if(!empty($order) && is_array($order)){
			foreach($order as $key =>$val ){
				$this->db->order_by($key,$val);
			}
		}else{
			$primary_arr = $this->getPrimary('hf_seo',$table);
			if(!empty($primary_arr)){
				$this->db->order_by($primary_arr[0]->COLUMN_NAME,'DESC');
			}
		}

		$this->db->select($show_field)->from($table);
		
		//求条件下总数
		if($type == 'total'){
			return $this->db->count_all();
		}
		
		//返回当前分页数据
		if($type == 'range'){
			//分页边界值 设置
			$limit_start = $page <= 1 ? 0 : ($page-1)*$limit;
			$this->db->limit($limit,$limit_start);
			$query = $this->db->get();
			// return $this->db->last_query(); //返回组合后的SQL语句
			return $query->result_object();
		}
		return FALSE;
	}

















}
