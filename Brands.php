<?php 

require "config.php";

class Brands 
{
	protected $data;
	
	function __construct()
	{
		$this->data=array();
		
	}

    public function getBrands(){
			$query = "SELECT * FROM `usuario`LIMIT 50;";
			$result = mysql_query($query) ;
			while ($rows=mysql_fetch_object($result)) {
				$this->data[]=$rows;
			}
			return $this->data;

    }


     public function getBrandsById($id){
			$query = "SELECT * FROM `usuario` WHERE Id =$id  ;";
			$result = mysql_query($query) ;
			return mysql_fetch_object($result);
				
			
		 

    }
    
     public function add_brands($_post){
        
		$name = $_post['name'];

		$appat = $_post['appat'];

                $apmat = $_post['apmat'];
                
                $fono = $_post['fono'];



     	$query = "INSERT INTO usuario(Nombres,Appat,Apmat,Fono) values('$name','$appat', '$apmat', '$fono')";

     	if (mysql_query($query)) 
     	return true;
     	return false;
     }

    
     public function edit_brands($_post){
                $id = $_post ['id'];
                
		$name = $_post['name'];

		$appat = $_post['appat'];

                $apmat = $_post['apmat'];
                
                $fono = $_post['fono'];

     	$query = "UPDATE usuario SET Nombres='$name', Appat='$appat', Apmat='$apmat', Fono='$fono' WHERE Id = $id";
      
     	if (mysql_query($query)) 
     		return true;
     	return false;
     }

     public function delete_brands($id){
 

     	$query = "DELETE FROM usuario  WHERE Id = $id";
      	echo $query;
     	if (mysql_query($query)) 
     		return true;
     	return false;
     }

 

}