<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link href="./lib/ligerUI/skins/Aqua/css/ligerui-all.css" rel="stylesheet" type="text/css" />
    <script src="./lib/jquery/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="./lib/ligerUI/js/core/base.js" type="text/javascript"></script>
    <script src="./lib/ligerUI/js/plugins/ligerLayout.js" type="text/javascript"></script>
    <script src="./lib/ligerUI/js/plugins/ligerGrid.js" type="text/javascript"></script>
    <script src="./lib/ligerUI/js/plugins/ligerTab.js" type="text/javascript"></script>
    <script src="./lib/ligerUI/js/plugins/ligerDrag.js" type="text/javascript"></script>

    <script type="text/javascript"> 
        $(function ()
        {
             $("#navtab1").ligerTab(); 

            $("#layout1").ligerLayout({
                onLeftToggle: function (isColl)
                {
                    //alert(isColl ? "收缩" : "显示");
                },
                onRightToggle: function (isColl)
                {
                   // alert(isColl ? "收缩" : "显示");
                },
                leftWidth:200,
                rightWidth:200,
                topHeight:100

            });
        });
        
 </script> 
    <style type="text/css">
        body{ padding:10px; margin:0;}
        #layout1{  width:100%; margin:40px;  height:400px;
                   margin:0; padding:0;} 
        #accordion1 { height:270px;}
         h4{ margin:20px;}
    </style>
</head>
<body style="padding:10px">
        <div id="layout1">
            <div position="top"></div>
            <div position="left" title="左侧"></div>
            <div position="center" title="标题">
                

                <div id="navtab1" style="width: 100%;height:100%;overflow:hidden; border:1px solid #A3C0E8; ">
                    <div tabid="home" title="我的主页" lselected="true"  style="height:300px" >
                        <iframe frameborder="0" name="showmessage" src="./demos/form/form.htm"></iframe>
                    </div>
              
                </div>





            </div>
            <div position="right" title="右侧"></div>
            
            <div position="bottom">
                <h1>this is bottom!!!!!!!!!!!</h1>
            </div>
        </div> 
           
     <div style="display:none;">
     
</div>
</body>
</html>
