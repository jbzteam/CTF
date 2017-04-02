><?php
require('./config/inc.php');
if(@$_COOKIE["PHPSESSID"]==="7fa26c8192a47a49b9530be18e1310e5"){
include_once "./config/editor.php";
session_start();
   if(isset($_POST['editbtn'])){
       $page = @$_GET['edit'];
       header("Location: ".$_SERVER["PHP_SELF"]."?error");
   }
   
   if(!isset($_GET['edit'])){
       if(isset($_COOKIE['editor'])){
           $Editor = unserialize(base64_decode($_COOKIE['editor']));
       }else{
           $Editor = new StyleEditor("./css/asset.css");
           setcookie("editor",base64_encode(serialize($Editor)));
       }
   }else{
       $Editor = new StyleEditor(@$_GET['edit']);
       setcookie("editor",base64_encode(serialize($Editor)));
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Interface</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/sb-admin-2.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="administrator.php">Admin Interface</a>
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="administrator.php"><i class="fa fa-dashboard fa-fw"></i> Admin Dashboard</a>
                        </li>
                        <li>
                            <a href="transactions.php"><i class="fa fa-dashboard fa-fw"></i> Review Transactions</a>
                        </li>
                        <li>
                            <a href="settings.php"><i class="fa fa-dashboard fa-fw"></i> Settings</a>
                        </li>
                        <li>
                            <a href="logout.php"><i class="fa fa-dashboard fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Settings</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Markito Settings
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <tr>
                                    <td><label>PCI Gateway</label></td>
                                    <td>
                                    <input value="10.0.0.165:65099" type="text" size="60" id="ip"></input>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Fraud Detection</label>
                                    </td>
                                    <td>
                                        <label class="radio-inline">
                                        <input id="optionsRadiosInline1" type="radio" value="option1" name="optionsRadiosInline"/>
                                        Disabled
                                        </label>
                                        <label class="radio-inline">
                                        <input id="optionsRadiosInline2" type="radio" checked="" value="option2" name="optionsRadiosInline"/>
                                        Enabled
                                        </label>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Update Template
                        </div>
                        <div class="panel-body">
                             <div class="form-group">
                                <textarea class="form-control" rows="15"><?php echo $Editor->get_content(); ?></textarea>
                             </div>
                             <form method=post action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])."?edit"; ?>">
                                <button name="editbtn" class="btn btn-primary" onclick="document.forms[0].submit()"><i class="fa fa-edit "></i> Edit</button>
                             </form>
                             <br><br>    
                            <?php
                                if(isset($_REQUEST['success'])){
                                    echo '<div class="alert alert-success"><strong>Done!</strong> File was edited.</div>';
                                }else if(isset($_REQUEST['error'])){
                                    echo '<div class="alert alert-danger"><strong>Error!</strong> Permission denied.</div>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php }else{header("Location: administrator.php");} ?>
