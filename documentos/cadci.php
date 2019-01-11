<?php 
 
$numci = $_POST['numeroci'];
$datasaida = $_POST['datasaida'];
$assuntoci = $_POST['assuntoci'];
$destiunoci = $_POST['destinoci'];
$connect = mysqli_connect('127.0.0.1','root','','dbdocumentos');
#$db = mysqli_select_db('test');
$query_select = "SELECT idsetor FROM tbsetor WHERE idsetor = '$idsetor'";
$select = mysqli_query( $connect , $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['setor'];
  
  if($idsetor == "" || $idsetor == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo idsetor deve ser preenchido');window.location.href='cadastrosetor.html';</script>";
 
    }else{
		
      if($logarray == $idsetor){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse cpf já existe');window.location.href='cadastro.html';</script>";
        die();
 
      }else{
		 
        $query = "INSERT INTO tbsetor (idsetor,nomesetor,diretoria,descricaosetor) VALUES ('$idsetor','$nomesetor','$diretoria','$descrisetor')";
        $insert = mysqli_query( $connect , $query)or die("Erro ao tentar cadastrar registro");;
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Setor cadastrado com sucesso!');window.location.href='cadastrosetor.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
      }
    }
?>