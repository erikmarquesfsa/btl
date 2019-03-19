<section class="content-header">
          <h1>
            Formulário de Cadastro de Motoristas
            <small>&nbsp;</small>
          </h1>
          <!--<ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>-->
        </section>

        <!-- Main content -->
        <section class="content">

        <div class="box box-primary">
          <div class="box-header with-border">

          <!--<div style="background: #fff;padding: 0px;vertical-align: middle;text-align: center"> -->           
            
          <form>
            <table class="table" style="box-shadow: 0px 0px 1px #fff;border-radius: 3px;">

              <tr>
                <td style="vertical-align: middle;text-align: center">Nome Completo:</td>
                <td colspan="3">
                  <input type="text" style="border-radius: 3px" required="" class="form-control" name="cp1">
                </td>
              </tr>

              <tr>
                <td style="vertical-align: middle;text-align: center">CNH:</td>
                <td>
                  <input type="number" style="border-radius: 3px" required="" class="form-control" name="cp2">
                </td>

                <td style="vertical-align: middle;text-align: center">Contato:</td>
                <td>
                  <input type="text" style="border-radius: 3px" required="" class="form-control" name="cp3">
                </td>
              </tr>

              <tr>
                <td style="vertical-align: middle;text-align: center">Situação:</td>
                <td>
                  <select name="cp4" class="form-control">
                    <option value="AVULSO">AVULSO</option>
                    <option value="FUNCIONÁRIO">FUNCIONÁRIO</option>
                    <option value="OUTROS">OUTROS</option>
                  </select>
                </td>
              </tr>
            

            <tr>
              <td style="text-align: center" colspan="4">
                <input type="submit" value="Salvar" class="btn btn-primary">
              </td>
            </tr>

            </table>

          </form>

          </div>
        </div>

        </section>