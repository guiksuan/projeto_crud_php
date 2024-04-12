<?php include("blades/top.php");?>

  <!-- <div class="container">
    <form action="">
      <label>Nome</label>
      <input type="text"></input>
      <button>Enviar</button>
      </form>
  </div> -->

  <div class="container mt-3">
    <h1>Lista de Alunos</h1>
    <a href="v_cadastro.php" class="btn btn-primary">Novo Aluno</a>
  </div>  

  <div class="container mt-4 bg-white p-3 rounded">
    <table class="table table-bordered table-hover table-striped  ">
      <thead>
        <tr>
          <td><b>Código</b></td>
          <td><b>Nome</b></td>
          <td><b>Cidade<b></td>
          <td><b>Curso</b></td>
          <td colspan="2"><b>Ação</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01</td>
          <td>Arthur</td>
          <td>Registro</td>
          <td>TDS</td>
          <td><a href="#" class="btn btn-success">Editar</a></td>
          <td><a href="#" class="btn btn-danger">Excluir</a></td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>02</td>
          <td>Carlos</td>
          <td>Registro</td>
          <td>TDS</td>
          <td><a href="#" class="btn btn-success">Editar</a></td>
          <td><a href="#" class="btn btn-danger">Excluir</a></td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>03</td>
          <td>Guilherme Kauan</td>
          <td>Pariquera-açu</td>
          <td>TDS</td>
          <td><a href="#" class="btn btn-success">Editar</a></td>
          <td><a href="#" class="btn btn-danger">Excluir</a></td>
        </tr>
      </tbody>
      <tfoot>
      <tr>
          <td colspan="6"><b>Rodapé da tabela</b></td>
        </tr>
      </tfoot>
    </table>
  </div>

<?php include("blades/footer.php");?>
