<?php
  if (!$buscadousuario) {
    echo "faça sua pesquisa";
    exit;
  }

  echo "<article>";
  echo "<h1>Busca - {$buscadousuario}</h1><br>";
  echo "</article>";

  switch ($buscadousuario) {
    case 'carro';

      echo "   <article>";
      echo "   <p>Vc pesquisou carro</p>";
      echo "   </article>";
      break;

      case 'moto';

      echo "   <article>";
      echo "   <p>Vc pesquisou moto </p>";
      echo "   </article>";
      break;

      case 'bike';

      echo "   <article>";
      echo "   <p>Vc pesquisou bike </p>";
      echo "   </article>";
      break;

      case 'patins';

      echo "   <article>";
      echo "   <p>Vc pesquisou patins </p>";
      echo "   </article>";
      break;

      case 'skate';

      echo "   <article>";
      echo "   <p>Vc pesquisou skate</p>";
      echo "   </article>";
      break;


      default:
        echo "nada encontrado";
      break;
      }
?>