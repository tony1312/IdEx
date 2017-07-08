<html>
<head>
  <meta charset="utf-8"/>
  <title> Install IdEx </title>
</head>

<style>
  /*==input template start==*/
   ul{
     height: 50px;
     padding-left: 0px;
     padding-top: 0px;
   }
   li{
     list-style:none;
   }
  
   .top {
    background: none repeat scroll 0% 0% #FFFFFE;
    top: 0px;
    left: 0px;
    width: 100%;
    position: fixed;
    height: 75px;
    z-index:233;
}
   ti {
    left: 25px;
    position: relative;
    top: 20px;
    line-height: 38px;
    font-size: 28px;
    border-bottom: 2px solid #000;
    border-top: 2px solid #000;
    padding: 5px;
}
  h3d {
    color: #8B9EBF;
    background: none repeat scroll 0% 0% #F0FFF0;
    border-radius: 5px;
    padding: 5px;
}
  .w{
    height: 43px;
    display: inline-block;
    position: relative;
    width: 250px;
    margin-left:66px;
    margin-top:40px;
  }
  
  .apple {
    border-width: 0px;
    color: #9E8282;
    font-size: 19.2px;
    z-index: 0;
    height: 100%;
    margin-left: 60px;
    width: calc(100% - 60px);
    background: none repeat scroll 0% 0% transparent;
  }
  .t:before {
     top: 0px;
  }
  
  .t:after {
    bottom: 0px;
  }
  .t:before, .t:after {
   background: none repeat scroll 0% 0% #E2F9DD;
    width: 100%;
    z-index: 1;
    position: absolute;
    content: "";
    height: 2px;
    transition: transform 0.36s ease 0s;
    left: 0px;
  }
  

  .t {
    width: 100%;
    background: none repeat scroll 0% 0% transparent;
    position: absolute;
    left: 0px;
    text-align: left;
    height: calc(100% - 20px);
    padding: 10px 0px;
    cursor: pointer;
  }
  
  .q {
    transition: transform 0.18s ease 0s;
    font-size: 12px;
    color: #6F6666;
    padding: 4.5px;
  }
  
  .apple:focus +.t .q{
    transform: translate3d(-68px,0, 0);
  }
  .apple:focus {
    margin-left:6px;
    width:calc(100% - 10px)
  }
  .apple:focus + .t::before {
    transform: translate3d(0, -0.2em, 0);
  }
  .apple:focus + .t::after {
    transform: translate3d(0, 0.2em, 0);
  }
   
  /*==input template end==*/
</style>
<body style="background: none repeat scroll 0% 0% #A0DEA7;">


<div class="top"><ti>Hello World!</ti></div>
<br/><br/><br/><br/>
  <form method="post" style="margin-left:30px;">
<pre>Welcome To Installpage For IdEx</pre>
  <br/><h3d>DB Settings</h3d>
  
  <li>
  <ul>
     <span class="w">
        <input id="i1" class="apple" name="host" value=""/>
        <label for="i1" class="t"><div class="q">DB Host</div></label>
     </span>
   </ul>
   <ul>
     <span class="w">
        <input id="i2" class="apple" name="user" value=""/>
        <label for="i2" class="t"><div class="q">DB User</div></label>
     </span>
  </ul>
  <ul>
     <span class="w">
        <input id="i3" class="apple" name="pass" value=""/>
        <label for="i3" class="t"><div class="q">DB Pass</div></label>
     </span>
   </ul>
   <ul>
     <span class="w">
        <input id="i4" class="apple" name="name" value=""/>
        <label for="i4" class="t"><div class="q">DB Name</div></label>
     </span>
     </ul>
   </li>
   
   <br/>   <br/>   <br/>
   <h3d>Web Sites</h3d><br/>
     <span class="w">
        <input id="i5" class="apple" name="urls" value=""/>
        <label for="i5" class="t"><div class="q">Object url:</div></label>
     </span><br/><br/>
   <input name="submit" value="Submit" type="submit" style="     width: 95px;
    height: 50px;
    background: none repeat scroll 0% 0% rgba(112, 193, 245, 1);
    color: white;
    border: 2px solid;
    border-radius: 5px;
    cursor: pointer;
    
}"/>
  </form>
  
  
<?php

  //Welcome To Installpage For IdEx
    
   if (!$_POST['submit']==null) {
    $apple= '<?php'.PHP_EOL.PHP_EOL.'$dbhost="'.$_POST['host'].'";'.PHP_EOL.
     '$dbuser="'.$_POST['user'].'";'.PHP_EOL.
     '$dbpass="'.$_POST['pass'].'";'.PHP_EOL.
     '$dbname="'.$_POST['name'].'";'.PHP_EOL.
     '$rooturl="'.$_POST['urls'].'";'.PHP_EOL.
     '?>'.PHP_EOL;
     file_put_contents("idex.hello",$apple);
     
     echo "<script>alert('Install Successful Maybe ==QwQ');
     window.location.href='./';</script>";
        
   }
    
?>
</body>
</html>

