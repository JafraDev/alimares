<body>
    <div class="container-fluid">
        <?php include "Page_Content_Header.php" ?>
        <div style="
        width: 14%; 
        float:left;
        border:thin solid whitesmoke;
        height:100%;
        padding:5px;
        margin-top:20px;
        -webkit-box-shadow: 10px 11px 10px -12px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 11px 10px -12px rgba(0,0,0,0.75);
        box-shadow: 10px 11px 10px -12px rgba(0,0,0,0.75);
        ">
        <?php include_once "./Db/GetUserMenu.php"; ?>
    </div>
    <div style="width: 85%; float:right; margin-top: 20px;">