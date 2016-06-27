<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/public/css/screen.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script> 
    $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideToggle("slow");
        });
    });
    </script>
    
    <style> 
    #panel, #flip {
        padding: 5px;
        text-align: center;
        background-color: #e5eecc;
        border: solid 1px #c3c3c3;
    }
    
    #panel {
        padding: 50px;
        display: none;
    }
    </style>
    
</head>
<body>
<div class="container">

    <header>
        <nav class="site-nav group">
            <ul>
                <li><a href="<?php echo base_url('main');?>">หน้าแรก</a></li>
               
            </ul>
        </nav>


        

    </header>