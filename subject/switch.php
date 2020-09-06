<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
        <meta name="description" content="ربط الشبكات المحلية">
        <title> سويتش </title>
        <link rel="stylesheet" href="../css/css.css" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Changa:wght@800&family=Lalezar&family=Lemonada:wght@300&family=Rakkas&family=Reem+Kufi&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                    $('.sidebarbtn').click(function(){
                        $('.sidebar').toggleClass('active');
                        $('.sidebarbtn').toggleClass('toggle');
                })
        }) 
        </script>
    </head> 
    <body>
        <!-- start sidebar -->
        <div class="sidebar"> 
            <ul>
                <li><a href="../elmahad.php"> الصفحة الرئيسية </a> </li>
                <li><a href="../elmanhag.php"> المناهج </a> </li>
                <li><a href="../table.php"> الجدول </a> </li>
                <li><a href="../elt3ref.php"> تعريف </a> </li>
                <li><a href="../call.php"> الاتصال </a> </li>
                <li><a href="../note.php"> الملاحظات </a> </li>
            </ul>
            <button class="sidebarbtn"> 
                <span>  </span>
            </button>
        </div>
        <!-- end sidebar -->
        
        <!-- start subject -->
        <div class="container">
            <div class="subject"> MAC address </div>
            <table>
                <tr>
                    <th> مذكرات </th>
                    <th> كتاب </th>
                    <th> ملخص </th>
                    <th> فيديوهات </th>
                    <th> معمل </th>
                    <th> امتحانات </th>
                    <th> برامج </th>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li><a href="https://drive.google.com/file/d/1VseILDUGubVwZxcZLV1tPoLe1uzS2wgA/view?usp=sharing"> ملزمة المطرية </a> </li>
                            <li><a href="https://drive.google.com/file/d/1QTaWbw1uBYY7hoCP5XQHjWNND5ERmxzY/view?usp=sharing"> ملزمة 2 </a> </li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><a href="#"> 1 </a> </li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><a href="#"> 1 </a> </li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                           
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><a href="https://drive.google.com/file/d/1mok7_Z8RuLVdwx2Kq2a0W95Icm0GaULk/view?usp=sharing"> امتحانات </a> </li>
                            <li><a href="https://drive.google.com/file/d/1RACVwnt90Z69vp4TjRRD8bSRQqAjY2qn/view?usp=sharing"> امتحان يناير 2015 محلول </a> </li> 
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><a href="https://drive.google.com/file/d/1iIauQTbYlqJzuX4ti5NHvxcDZN7Lol9v/view?usp=sharing"> subnet calculator </a> </li> 
                        </ul>
                    </td>
                </tr>
             </table>
        </div>
        <!-- end subject -->
    </body>
</html>