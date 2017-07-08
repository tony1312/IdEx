<meta charset="utf-8">

<?php 

//  = settings =

   if (!file_exists('idex.hello')) { header("Location: install.php");} 

  require_once("idex.hello");

//  = Init =

  $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); //connect database
  if (!$conn) die("==连接数据库失败=="."<br/><br/>ERR_Info: <br/>".mysqli_error($conn));
  mysqli_query($conn,"set names 'utf8';");                 //setcharset!
  
  
//  = my own function s =

   function checkdbs(){
   
     $a='CREATE TABLE comment (  
           pid INT(9) AUTO_INCREMENT,   
           time INT(10),
           author VARCHAR(30),   
           email VARCHAR(55),   
           content VARCHAR(1024),  
           ip VARCHAR(30) ,
           primary key(pid)
         )character set = utf8; '; 
     mysqli_query($GLOBALS['conn'],$a);  
              
   }
   
   function querypost(){
      
      $a="SELECT * FROM comment ORDER BY pid DESC;";
      $rs=mysqli_query($GLOBALS['conn'],$a);
      $tot=mysqli_num_rows($rs);
      
      
      if ($tot<1) {
         echo "<div class=\"content\">\n Nothing Here ? ……\n</div>\n";
         return false;
      }

      
      while ($temp=mysqli_fetch_array($rs)){
      
        $time=$temp["time"];
        $time=date("@ D. M.jS Y -G:i:s",$time);
        
        $author=$temp["author"];
        $email=$temp["email"];
        $content=$temp["content"];
        $gravatar=get_gravatar($email);
        
        echo'
               <!--cut-->
                <tr class="post">
                   <td class="photo"><img class="headimg" src="'.$gravatar.'"></td> 
                   <td class="rd">
                      <table style="width:100%;">
	                     <tr class="infoa"><td><a href=mailto:"'.$email.'">'.$author.'</a> '.$time.' </td></tr>
	                     <tr class="content">
	                       <td><pre>'.$content.'</pre></td>
	                     </tr>
                      </table>
                   </td>
                </tr>             
           ';
        
       }
      
   }
  
   function addpost(){

     $a="INSERT INTO comment(`time`,`author`,`email`,`content`) VALUES('".$GLOBALS['time'].
        "','".$GLOBALS['author']."','".$GLOBALS['email']."','".$GLOBALS['content']."');";

      echo "<h3>Order:</h3><font color='green'>".$a."</font><br/><br/>";

     if (mysqli_query($GLOBALS['conn'],$a)) return true;
     
     echo "<h3>ERR_INFO:</h3><font color='orange'>".mysqli_error($GLOBALS['conn'])."</font><br/><br/>";
     return false;

   }

  function copyright($start, $owner) {
   $date = date('Y');
    echo "© Copyright ";
    if ( $start < $date ) {
    echo "{$start} - ";
    }
    echo "{$date} {$owner}";
   }


// = Other Function s =
   
/**
 * Get either a Gravatar URL or complete image tag for a specified email address.
 *
 * @param string $email The email address
 * @param string $s Size in pixels, defaults to 80px [ 1 - 2048 ]
 * @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
 * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
 * @param boole $img True to return a complete IMG tag False for just the URL
 * @param array $atts Optional, additional key/value attributes to include in the IMG tag
 * @return String containing either just a URL or a complete image tag
 * @source https://gravatar.com/site/implement/images/php/
 */
   function get_gravatar( $email, $s = 60, $r = 'g', $d='identicon',$img =false, $atts = array() ) {
      // $d = urlencode($GLOBALS['rooturl'].'/img/1.png');
       $url = 'https://www.gravatar.com/avatar/';
       $url .= md5( strtolower( trim( $email ) ) );
       $url .= "?s=$s&r=$r&d=$d";
       if ( $img ) {
           $url = '<img src="' . $url . '"';
           foreach ( $atts as $key => $val )
               $url .= ' ' . $key . '="' . $val . '"';
           $url .= ' />';
       }
      // return $url.'&default='.urlencode($GLOBALS['rooturl'].'/img/1.png');
       return $url;
   }
   
?>

