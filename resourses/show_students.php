<?php
class showStudents{
    
    private $link;
    private $host, $user,$ps,$db;
    private $username, $password, $sql,$login, $data, $rows;

    public function __construct(){
    
     
        $this -> host = "localhost";
        $this -> user = "root";
        $this -> ps = "lumas";
        $this -> db = "mpghs";
        $this -> connect();

    }
    
    public function connect(){
        $this -> link = mysql_connect($this->host, $this->user, $this->ps);
        mysql_select_db($this -> db) or die("database not found");
        
    }
    
    
    public function show(){
        $sql = "select * from students as s, picture as p where s.mobile = p.id order by fname ASC";
        $getValues = mysql_query($sql);
        while($data = mysql_fetch_array($getValues)){
            if($data[11] > 0){
            ?>

    <div class="col-xs-12 col-sm-4">
        <div class="thumbnail">

            <div class="img-holder">
                <img class="img-responsive img-thumbnail" src="<?php echo $data[13];?>" width="242" height="200">
            </div>



            <div class="caption">
                <div>
                    <h3><?php echo $data[0]." ".$data[1];?></h3>
                </div>
                <div>
                    <h4><span class="fa fa-birthday-cake"></span> <?php echo date('F j, Y',strtotime($data[2]));?></h4>
                </div>

                <div class="">

                    <h4><span class="fa fa-tint"></span> <?php echo $data[4];?></h4>
                </div>

                <div class="">
                    <h4><span class="fa fa-mobile"></span> <?php echo $data[5];?></h4>
                </div>

                <div class="">

                    <h4><span class="fa fa-envelope"></span> <?php echo $data[6];?></h4>
                </div>
                <div class="">

                    <h4><span class="glyphicon glyphicon-education"></span> <?php echo $data[8];?></h4>
                </div>
                <div class="">

                    <h4><span class="fa fa-university"></span> <?php echo $data[9];?></h4>
                </div>

                <div class="">

                    <h4><span class="fa fa-briefcase"></span> <?php echo $data[10];?></h4>
                </div>

            </div>
        </div>
    </div>



    <?php
            }
        }
        
    }
}


?>
