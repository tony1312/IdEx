<html>
<head>
    <title> IdEx </title>
    <meta charset="utf-8">
    
</head>

<?php
   require_once("db_funs.php");
   checkdbs();
?>
 
<style type="text/css">

   pre.notice{
    background: none repeat scroll 0% 0% rgba(230, 239, 222, 1);
    border-left: 3.5px solid rgba(125, 204, 157, 1);
    padding: 10px; 
   }
   input.nameinput{
        border-top: 3px solid rgba(135, 135, 191, 1);
        border-radius: 2.1px;
        background:rgba(248, 249, 246, 1);
        margin: 16px;
        padding: 9px;
        width: 146px;
        border-left: 0px;
    }
    input.nameinput:focus{
      border-top: 3px solid rgba(249, 97, 26, 1);
      color: rgba(65, 170, 170, 1);
    }
    input.submit{
      background: none repeat scroll 0% 0% #629C86;
      padding: 12px;
      border: 0px none;
      color: #FFF;
      margin-top: 15px;
      margin-left: 5px;
    }
    input.submit:hover{
      color: rgba(231, 98, 98, 1);
      background: rgba(243, 246, 240, 1);
      cursor: pointer;
    }
    textarea{
      padding: 15px;
      width:100%;
    }
    textarea:focus{
       border: 2px solid rgba(202, 236, 244, 1);
       background: rgba(247, 254, 249, 1);
       padding: 20px;
    }
    .edit{
      width: 100%; 
      height: 100%;
    }
    body {
       margin: 0px;
       border-style: solid;
       border-color: #BFDBE4;
       left: 0px;
       top: 0px;
       right: 0px;
       bottom: 0px;
       border-width:3vh 1.3vw;
       position: fixed;
   }
    .fill{
     width: 2px;
     border-width: 5px 10px;
     border-style: solid;
     border-color: #FFF;
     background: none repeat scroll 0% 0% #808080;
   }

   table.new,tr.new{
    width:100%;
    height:50vh; 
  }
   td.new {
    vertical-align: top;
  }
  .allposts {
    overflow-y: auto;
    width: 100%;
    height: 89vh;
   }


/*style2*/
 
   .photo{
     width:60px;
     vertical-align: top;
   }
   img.headimg{
      width: 56px;
      height: 56px;
      border-radius: 50%;
   }
   .post{
     width:100%;  
   }
   .infoa{ 
     width:100%;   
   }
   .infoa td{
     color:rgba(154, 182, 144, 1);
   }
   .infoa a{
      color:rgba(126, 84, 131, 1);
      text-decoration: none;
   }
   .content td{
      width: 100%;
      background: none repeat scroll 0% 0% #F0F8FF;
      padding: 8px;
   }
  

</style>

<body>

    <table class="new">
     <tr class="new">
       <td class="new" style="padding-left:25px;  width:48.5%;">
       <div style="height: 89vh;overflow-y: auto;width: 100%;padding-right:15px;">
           <pre class="notice">Welcome to IdEx 2017 !</pre>
            <form method="post" action="add.php">
	                 ≖Author≖:<input name="author" class="nameinput" type="text" value="Ha?"/><br/>
                     ≖E-mail≖:<input name="email" class="nameinput" type="text" value="aa@bb.cc"/>
              <input name="button" type="submit" value="Submit" class="submit"/><br/>
	                  ≖Words≖:<br/>
               <div class="edit">
                    <textarea class="word"name="content" rows="6" >Write Here !</textarea>
               </div>
               <div class="footer"><?php echo copyright('2017','<a href="https://github.com/tony1312/IdEx">IdEx</a>')?></div>
            </form>
            
        </div>
       </td>

       <td class="fill">
         <div></div>
       </td>

       <td class="new" >
           <div class="allposts">
           
           <!--table start-->
           <table style="width:100%;vertical-align: top; padding-top:25px;">
             
              <?php
                 querypost();
              ?>
           
           </table>
           <!--table end-->
           
           </div>
        </td>
      </tr>
    </table>

 </body>
</html>

