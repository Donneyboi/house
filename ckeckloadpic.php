        <?php

            foreach ($_FILES['myfile']['name'] as $value => $key) {
            $rand=mt_rand().mt_rand();
            $filename=mt_rand().$_FILES['myfile']['name'][$value];
            $folder="postimage/";
            $mainfile=$folder.$rand.$filename;
            $mainfile2=$rand.$filename;
            $filename2=$_FILES['myfile']['tmp_name'][$value];
             
             if (move_uploaded_file($filename2, $mainfile)) {
                //echo $folder.$rand.$filename;
                echo 2;
                
             }
]


        ?>

