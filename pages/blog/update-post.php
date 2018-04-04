<?php
require '../../DB/init.php';

try{
    $id = isset($_POST['id'])? $_POST['id']: '';
    $titulo = isset($_POST['titulo'])? $_POST['titulo']: '';
    $autor = isset($_POST['autor'])? $_POST['autor']: '';
    $conteudo = isset($_POST['editor-text'])? $_POST['editor-text']: '';
    $data = date("Y/m/d");
    $img 	= $_FILES['img']['name'];

    $_UP['pasta'] = 'fotos/';


    $_UP['tamanho'] = 1024*1024*100; //5mb


    $_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');

    //Renomeiar
    $_UP['renomeia'] = false;

    $_UP['erros'][0] = 'Não houve erro';
    $_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
    $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
    $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
    $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

    if($_FILES['arquivo']['error'] != 0){
        die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['img']['error']]);
        exit;
    }

    $extensao = strtolower(end(explode('.', $_FILES['img']['name'])));
    if(array_search($extensao, $_UP['extensoes'])=== false){
        echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/pages/blog/update-post.php'>
					<script type=\"text/javascript\">
						alert(\"A imagem não foi cadastrada extesão inválida.\");
					</script>
				";
    }

    else if ($_UP['tamanho'] < $_FILES['img']['size']){
        echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/pages/blog/update-post.php'>
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
    }
    else{
        if($UP['renomeia'] == true){

            $nome_final = time().'.jpg';
        }else{

            $nome_final = $_FILES['img']['name'];
        }

        if(move_uploaded_file($_FILES['img']['tmp_name'], $_UP['pasta']. $nome_final)){
            $pdo = db_connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = 'update posts set titulo = :titulo, autor= :autor,conteudo = :conteudo,data = :data ,image = :image WHERE id_post = :id';
            $stmt=  $pdo->prepare($sql);

            $stmt->execute(array(
                ':id'=>$id,
                ':titulo'=>$titulo,
                ':autor'=> $autor,
                ':conteudo'=>$conteudo,
                ':data'=>$data,
                ':image'=>$nome_final
            ));

            header('Location: edit-post.php');
        }else{

            echo "Imagem nao salva";
        }
    }
}

catch (PDOException $e) {
    echo 'Error'. $e->getMessage();

}










