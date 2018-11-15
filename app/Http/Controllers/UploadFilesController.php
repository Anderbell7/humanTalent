<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFilesController extends Controller
{
    public function uploadFiles()
    {

        $spc = '_';
        $CV = 'HV'; #Hoja de vida
        $PD = 'DPER'; #Documentos personales
        $SC = 'CEFORM'; #Certificado Educación Formal
        $SCC = 'CECOMP'; #Certificados Estudio complementario
        $WE = 'EXLAB'; #Experiencia laboral
        $LC = 'CIDIOM'; #Certificados Idiomas


        #Nombrando las carpetas:
        $CVFolder = $spc.$CV;
        $PDFolder = $spc.$PD;
        $SCFolder = $spc.$SC;
        $SCCFolder =$spc.$SCC;
        $WEFolder = $spc.$WE;
        $LCFolder = $spc.$LC;


        return view('resumes.uploadFiles')
            ->with("CVFolder", $CVFolder)
            ->with("PDFolder", $PDFolder)
            ->with("SCFolder", $SCFolder)
            ->with("SCCFolder", $SCCFolder)
            ->with("WEFolder", $WEFolder)
            ->with("LCFolder", $LCFolder);
    }

    public function process()
    {
        $FileType = pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION);
        echo $target_file = "../hojasDeVida/".$_SESSION['user_id']."/".$_SESSION['user_id'].$_POST['selectFiles']."/".pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_FILENAME)."_".date("Y-m-d_His").".".$FileType;
        
        if( !file_exists("../hojasDeVida/".$_SESSION['user_id']) ){
            mkdir("../hojasDeVida/".$_SESSION['user_id'],  0700);
        }
        if( !file_exists("../hojasDeVida/".$_SESSION['user_id']."/".$_SESSION['user_id'].$_POST['selectFiles']) ){
            mkdir("../hojasDeVida/".$_SESSION['user_id']."/".$_SESSION['user_id'].$_POST['selectFiles'],  0700);
        }    
        
        //$target_file = $target_dir.$_SESSION['user_id']."/".basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        #strtolower:convierte cadena en minusculas; pathinfo: Devuelve información acerca de la ruta de un fichero,
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = $_FILES["fileToUpload"]["tmp_name"];
            if($check !== false) {
                #echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                #echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Lo sentimos, este archivo ya existe.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            echo "Lo sentimos, el archivo supera el tamaño permitido.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        $FileType = strtolower($FileType);
        if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"
        && $FileType != "xslx" && $FileType != "pdf") {
            echo "Los formatos aceptados son jpg, jpeg, png, xlsx y pdf.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo " Su documento no puede ser cargado.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "El documento ". basename( $_FILES["fileToUpload"]["name"]). " se ha subido satisfactoriamente.";?>
                <br>
            <?php    echo $_FILES['fileToUpload']['size']."Bytes";
            } else {
                echo " Lo sentimos, hubo un error al cargar su archivo.";
            }
        }
        uploadFiles();
    }    
}

