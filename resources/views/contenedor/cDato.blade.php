<div class="row" id="app">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header text-left">
        @{{titulo}}
      </div>
      <div class="card-body">
        <form action="" id="frmDcl" @submit.prevent="execDcl()">
          {{ csrf_field() }}
          <div class="form-group row">
            <div class="col-md-4 mb-4">
              <label for="dabatase"><i class="fa fa-database fa-lg mr-2"></i>
                Base de Datos
              </label>
              <select class="js-example-basic-single form-control" name="database" id="database" required>
                <option value="">Ninguno</option>
                <option v-for="database of databases" :value="database.Database">
                  @{{database.Database}}
                </option>
              </select>
            </div>
            <div class="col-md-4 mb-4">
              <label for="usuario"><i class="fa fa-user fa-lg mr-2"></i>
                Usuario
              </label>
              <select class="js-example-basic-single form-control" name="user" id="user" required>
                <option value="">Ninguno</option>
                <option v-for="user of users" :value="user.id">
                  @{{user.Host}} | @{{user.User}}
                </option>
              </select>
            </div>
            <div class="col-md-4 mb-4">
              <label for="usuario"><i class="fa fa-key fa-lg mr-2"></i>
                Permiso
              </label>
              <select class="js-example-basic-single form-control" name="permission" id="permission" required>
                <option value="">Ninguno</option>
                <option value="GRANT">GRANT</option>
                <option value="REVOKE">REVOKE</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4 mb-4">
              <label for="usuario"><i class="fa fa-bars fa-lg mr-2"></i>
                Tipo
              </label>
              <select class="js-example-basic-single form-control" name="type" id="type" required>
                <option value="">Ninguno</option>
                <option value="SELECT">SELECT</option>
                <option value="INSERT">INSERT</option>
                <option value="UPDATE">UPDATE</option>
                <option value="INDEX">INDEX</option>
                <option value="DELETE">DELETE</option>
                <option value="CREATE">CREATE</option>
                <option value="ALTER">ALTER</option>
                <option value="DROP">DROP</option>
                <option value="GRANT OPTION">GRANT OPTION</option>
                <option value="ALL PRIVILEGES">ALL PRIVILEGES</option>
              </select>
            </div>
            <div class="col-md-4 mb-4">
              <label for="objets"><i class="fa fa-file fa-lg mr-2"></i>
                Objeto
              </label>
              <select class="js-example-basic-single form-control" name="objet" id="objet" required>
                <option value="">Ninguno</option>
                <option v-for="objet of objets" :value="objet.TABLE_NAME">
                  @{{objet.TABLE_NAME}}
                </option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary float-right">
            <i class="fa fa-save fa-lg mr-2"></i>
            Ejecutar
          </button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-12 mt-5" id="resultDiv" style="display:none;">
    <div class="card">
      <div class="card-header">Resultado</div>
      <div class="card-body" id="resultSuccess" style="display:none;">
        <div class="alert alert-success" id="grantMsj" style="display:none;">
            Privilegio Otorgado Exitosamente
        </div>
        <div class="alert alert-primary" id="revokeMsj" style="display:none;">
            Privilegio Revocado Exitosamente
        </div>
        <h4>
            Sentencia:
        </h4>
        <br>
          <pre id="qryResult">
          </pre>
      </div>
      <div class="card-body" id="resultDanger" style="display:none;">
        <div class="alert alert-danger">
            Usuario sin privilegios para modificar privilegios
        </div>
      </div>
    </div>
  </div>
</div>
