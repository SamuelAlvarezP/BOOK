<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test de aprendizaje</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="card text-center">
    <div class="card-header">
        <h2>Test de aprendizaje</h2>
    </div>
    <div class="card-body">
    <table class="table-bordered justify-content-center">
        <thead>
            <tr>
                <th>Preguntas</th>
                <th >Respuesta 1</th>
                <th >Respuesta 2</th>
                <th >Respuesta 3</th>
            </tr>

        </thead>
        <tbody>
          <tr>
            <form action="{{route('test')}}" method="post">
                @csrf
              <td><strong>¿Qué te gusta más en tu cumpleaños?</strong></td>
              <td>
                <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" id="respuesta1" name="decoration" onclick="javascript:birthday();">La decoración
                    </label>
                  </div>
              </td>
              <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" id="respuesta2" name="mañanitas" onclick="javascript:birthday();">Cantar las mañanitas
                    </label>
                  </div>
              </td>
              <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" id="respuesta3" name="abrazar" onclick="javascript:birthday();">Abrazar
                    </label>
                  </div>
                </td>
          </tr>
          <tr>
            <td><strong>¿Qué actividades te gustan?</strong></td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta4" name="leer" onclick="javascript:activities();">Leer cuentos
                </label>
              </div>
              </td>
              <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta5" name="escuchar" onclick="javascript:activities();">Escuchar cuentos
                </label>
              </div>
              </td>
              <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta6" name="participar" onclick="javascript:activities();">Participar
                </label>
              </div>
            </div>
            </td>
          </tr>
          <tr>
            <td><strong>¿Qué haces en tu tiempo libre?</strong></td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta7" name="dibujar" onclick="javascript:freeTime();">Dibujar
                </label>
              </div>
            </td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta8" name="musica" onclick="javascript:freeTime();">Escuchar música
                </label>
              </div>
            </td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta9" name="jugar" onclick="javascript:freeTime();">Jugar
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td><strong>¿Qué es lo que más te gusta que te regalen?</strong></td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta10" name="libro" onclick="javascript:gift();">Un libro
                </label>
              </div>
            </td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta11" name="aparato" onclick="javascript:gift();">Un aparato para escuchar música
                </label>
              </div>
            </td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta12" name="plastilina" onclick="javascript:gift();">Plastilina
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td><strong>Si tuvieras dinero, ¿Qué comprarías?</strong></td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta13" name="camara" onclick="javascript:buy();">Una cámara
                </label>
              </div>
            </td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta14" name="radio" onclick="javascript:buy();">Un radio
                </label>
              </div>
            </td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta15" name="plastilina2" onclick="javascript:buy();">plastilina
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td><strong>¿Qué recuerdas cuando vas a una fiesta?</strong></td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta16" name="personas" onclick="javascript:remember();">Las personas
                </label>
              </div>
            </td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta17" name="musica" onclick="javascript:remember();">La música
                </label>
              </div>
            </td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta18" name="juegos2" onclick="javascript:remember();">Los juegos
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td><strong>¿Qué haces cuando te enojas?</strong></td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta19" name="cara" onclick="javascript:anger();">Cambio mi cara
                </label>
              </div>
            </td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta20" name="grito" onclick="javascript:anger();">Grito
                </label>
              </div>
            </td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta21" name="pataletas" onclick="javascript:anger();">Pataletas
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td><strong>¿Qué te gusta hacer en vacaciones?</strong></td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta22" name="tv" onclick="javascript:vacation();">Ver tv
                </label>
              </div>
            </td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta23" name="musica2" onclick="javascript:vacation();">Escuchar música
                </label>
              </div>
            </td>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="respuesta24" name="juguetes" onclick="javascript:vacation();">Jugar con mis juguetes
                </label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      <div id="errores" class="">Esperando un clic</div>
      <button type="submit" class="btn btn-dark">Enviar</button>
    </div>
    </div>
</div>
</table>
</form>
</body>
<script src="{{asset('js/funciones.js')}}"></script>
</html>
