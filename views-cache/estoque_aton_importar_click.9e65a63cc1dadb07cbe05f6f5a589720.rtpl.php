<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Lista de Usuários
    </h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="/admin/users">Usuários</a></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
  
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
              
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="" role="tab" aria-controls="pills-home" aria-selected="true">Importar Planilha</a>
            </li>
            </li>
          </ul>
        <form method="POST" action="/admin/estoqueclick" enctype="multipart/form-data">
          <label class="btn btn-primary" for="my-file-selector">
            <input id="my-file-selector" type="file" name ="arquivo" style="display:none" 
            onchange="$('#upload-file-info').text(this.files[0].name)"> 
            Importar Excel 
        </label>
        <button type="submit" onclick="return confirm('Deseja enviar o arquivo?')" class="btn btn-primary btn-sm btn-success">Enviar</button>
        <span class='label label-info' id="upload-file-info"></span>
      </form>
      <p>Importar como Planilha XML 2003(*.XML)</p>
      <h3>Upload do Excel Microsoft Excel (.XML2003)</h3>
              <div class="box-body no-padding">
                <div class="desc collapsible js-collapsible" data-processed="true">
                  <div>Selecione o arquivo para envio para upload.
                    Seus arquivos estão protegidos com segurança e disponíveis apenas apenas neste site.</div>
              </div>
              </div>
            </div>
      </div>
    </div>
  
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->