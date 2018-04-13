<?php 
                if (isset($_SESSION['login_user'])) {
                    echo '<script type="text/javascript">', 
                    'document.getElementById("addtocart").onclick = "showSnackbar()";', 
                    '</script>';} 
                else {
                    echo '<script type="text/javascript">', 
                    '', 
                    'alert("hello);', '</script>';
                } 
                ?>