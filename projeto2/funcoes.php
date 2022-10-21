   
  <?php 

    function dataBanco($data) 
    {

       $data = explode("/", $data); //[dd] [mm] [aaaa]
       $data = array_reverse($data); //[aaaa] [mm] [dd] 
       $data = implode("-", $data);

       return $data;
    };
     
    function dataTela($data) 
    {

       $data = explode("-", $data); //[dd] [mm] [aaaa]
       $data = array_reverse($data); //[aaaa] [mm] [dd] 
       $data = implode("/", $data);
        
       return $data;
    };
    
  
  
  ?>