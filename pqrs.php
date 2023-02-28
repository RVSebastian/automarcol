<?php include'./includes/components/header.php';?>
<?php 

if (isset($_POST['PQR'])) {
   $correo = $_POST['correo'];
   $nombre = $_POST['nombre'];
   $apellidos = $_POST['apellidos'];
   $documento = $_POST['documento'];
   $contacto = $_POST['contacto']; 
   $solicitud = $_POST['solicitud'];
   $evento_lugar = $_POST['evento_lugar'];
   $evento_fecha = $_POST['evento_fecha'];
   $descripcion = $_POST['descripcion'];
   $query = "INSERT INTO pqrs(correo, nombre, apellido, documento, ncontacto, tsolicitud, levento, fevento, descripcion, estado) 
   VALUES ('$correo', '$nombre', '$apellidos','$documento', '$contacto', '$solicitud', '$evento_lugar', '$evento_fecha', '$descripcion','Activo')";
   mysqli_query($conn, $query);

   $querymx = "select max(id)as id from pqrs order by id desc";
   $maxid = mysqli_query($conn, $querymx);
    foreach ($maxid as $id) {
      $mx = $id['id'];
    }
   $para = 'isistemas@automarcol.com';
   $titulo = 'TICKET PQRS '.$mx.' - AUTOMARCOL SAS';
   $mensaje = '<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><meta name="__cloudhq_email_draft_json" content="eyJjb3VudGVycyI6eyJ1X3JvdyI6MTgsInVfY29sdW1uIjoyNywidV9jb250ZW50X3RleHQiOjE2LCJ1X2NvbnRlbnRfaW1hZ2UiOjIwLCJ1X2NvbnRlbnRfYnV0dG9uIjoxLCJ1X2NvbnRlbnRfc29jaWFsIjoxLCJ1X2NvbnRlbnRfdmlkZW8iOjEsInVfY29udGVudF9kaXZpZGVyIjo3LCJ1X2NvbnRlbnRfY3VzdG9tX3BvbGwiOjEsInVfY29udGVudF9jdXN0b21fYm9va19tZSI6MSwidV9jb250ZW50X3RpbWVyIjoxLCJ1X2NvbnRlbnRfbWVudSI6MX0sImJvZHkiOnsiaWQiOiJGMHN0R29uRlVNIiwicm93cyI6W3siaWQiOiJxcTVGN21kZGx4IiwiY2VsbHMiOlsxXSwiY29sdW1ucyI6W3siaWQiOiJKVWlydHZtd2YxIiwiY29udGVudHMiOlt7ImlkIjoiLUJ1aFZkOExpVyIsInR5cGUiOiJkaXZpZGVyIiwidmFsdWVzIjp7IndpZHRoIjoiMCUiLCJib3JkZXIiOnsiYm9yZGVyVG9wV2lkdGgiOiIxcHgiLCJib3JkZXJUb3BTdHlsZSI6InNvbGlkIiwiYm9yZGVyVG9wQ29sb3IiOiIjQkJCQkJCIn0sInRleHRBbGlnbiI6ImNlbnRlciIsImNvbnRhaW5lclBhZGRpbmciOiIzNXB4IiwiYW5jaG9yIjoiIiwiaGlkZURlc2t0b3AiOmZhbHNlLCJkaXNwbGF5Q29uZGl0aW9uIjpudWxsLCJfbWV0YSI6eyJodG1sSUQiOiJ1X2NvbnRlbnRfZGl2aWRlcl82IiwiaHRtbENsYXNzTmFtZXMiOiJ1X2NvbnRlbnRfZGl2aWRlciJ9LCJzZWxlY3RhYmxlIjp0cnVlLCJkcmFnZ2FibGUiOnRydWUsImR1cGxpY2F0YWJsZSI6dHJ1ZSwiZGVsZXRhYmxlIjp0cnVlLCJoaWRlYWJsZSI6dHJ1ZX19XSwidmFsdWVzIjp7ImJhY2tncm91bmRDb2xvciI6IiIsInBhZGRpbmciOiIwcHgiLCJib3JkZXIiOnt9LCJib3JkZXJSYWRpdXMiOiIwcHgiLCJfbWV0YSI6eyJodG1sSUQiOiJ1X2NvbHVtbl8yNCIsImh0bWxDbGFzc05hbWVzIjoidV9jb2x1bW4ifX19XSwidmFsdWVzIjp7ImRpc3BsYXlDb25kaXRpb24iOm51bGwsImNvbHVtbnMiOmZhbHNlLCJiYWNrZ3JvdW5kQ29sb3IiOiIjMmMzNTY1IiwiY29sdW1uc0JhY2tncm91bmRDb2xvciI6IiIsImJhY2tncm91bmRJbWFnZSI6eyJ1cmwiOiIiLCJmdWxsV2lkdGgiOnRydWUsInJlcGVhdCI6InJlcGVhdCIsInNpemUiOiJjdXN0b20iLCJwb3NpdGlvbiI6InRvcC1sZWZ0IiwiY3VzdG9tUG9zaXRpb24iOlsiMCUiLCIwJSJdfSwicGFkZGluZyI6IjBweCIsImFuY2hvciI6IiIsImhpZGVEZXNrdG9wIjpmYWxzZSwiX21ldGEiOnsiaHRtbElEIjoidV9yb3dfMTUiLCJodG1sQ2xhc3NOYW1lcyI6InVfcm93In0sInNlbGVjdGFibGUiOnRydWUsImRyYWdnYWJsZSI6dHJ1ZSwiZHVwbGljYXRhYmxlIjp0cnVlLCJkZWxldGFibGUiOnRydWUsImhpZGVhYmxlIjp0cnVlfX0seyJpZCI6ImI1Tm82Mno2VTciLCJjZWxscyI6WzFdLCJjb2x1bW5zIjpbeyJpZCI6Im80MnByTGZDbTMiLCJjb250ZW50cyI6W3siaWQiOiJWZ0RfSU5BM05iIiwidHlwZSI6ImRpdmlkZXIiLCJ2YWx1ZXMiOnsid2lkdGgiOiIwJSIsImJvcmRlciI6eyJib3JkZXJUb3BXaWR0aCI6IjFweCIsImJvcmRlclRvcFN0eWxlIjoic29saWQiLCJib3JkZXJUb3BDb2xvciI6IiNCQkJCQkIifSwidGV4dEFsaWduIjoiY2VudGVyIiwiY29udGFpbmVyUGFkZGluZyI6IjEwcHgiLCJhbmNob3IiOiIiLCJoaWRlRGVza3RvcCI6ZmFsc2UsImRpc3BsYXlDb25kaXRpb24iOm51bGwsIl9tZXRhIjp7Imh0bWxJRCI6InVfY29udGVudF9kaXZpZGVyXzciLCJodG1sQ2xhc3NOYW1lcyI6InVfY29udGVudF9kaXZpZGVyIn0sInNlbGVjdGFibGUiOnRydWUsImRyYWdnYWJsZSI6dHJ1ZSwiZHVwbGljYXRhYmxlIjp0cnVlLCJkZWxldGFibGUiOnRydWUsImhpZGVhYmxlIjp0cnVlfX0seyJpZCI6IlRabVp5MUVYd3AiLCJ0eXBlIjoiaW1hZ2UiLCJ2YWx1ZXMiOnsiY29udGFpbmVyUGFkZGluZyI6IjEwcHgiLCJhbmNob3IiOiIiLCJzcmMiOnsidXJsIjoiaHR0cHM6Ly9zaGFyZTEuY2xvdWRocS1ta3QzLm5ldC84NGU0YmQzMjcxNjcxNy5wbmciLCJ3aWR0aCI6MTIwMCwiaGVpZ2h0IjoyNzAsImF1dG9XaWR0aCI6ZmFsc2UsIm1heFdpZHRoIjoiNDIlIn0sInRleHRBbGlnbiI6ImNlbnRlciIsImFsdFRleHQiOiIiLCJhY3Rpb24iOnsibmFtZSI6IndlYiIsInZhbHVlcyI6eyJocmVmIjoiIiwidGFyZ2V0IjoiX2JsYW5rIn19LCJoaWRlRGVza3RvcCI6ZmFsc2UsImRpc3BsYXlDb25kaXRpb24iOm51bGwsIl9tZXRhIjp7Imh0bWxJRCI6InVfY29udGVudF9pbWFnZV8yMCIsImh0bWxDbGFzc05hbWVzIjoidV9jb250ZW50X2ltYWdlIn0sInNlbGVjdGFibGUiOnRydWUsImRyYWdnYWJsZSI6dHJ1ZSwiZHVwbGljYXRhYmxlIjp0cnVlLCJkZWxldGFibGUiOnRydWUsImhpZGVhYmxlIjp0cnVlfX1dLCJ2YWx1ZXMiOnsiYmFja2dyb3VuZENvbG9yIjoiI2ZmZmZmZiIsInBhZGRpbmciOiIwcHgiLCJib3JkZXIiOnt9LCJib3JkZXJSYWRpdXMiOiIwcHgiLCJfbWV0YSI6eyJodG1sSUQiOiJ1X2NvbHVtbl8yNiIsImh0bWxDbGFzc05hbWVzIjoidV9jb2x1bW4ifX19XSwidmFsdWVzIjp7ImRpc3BsYXlDb25kaXRpb24iOm51bGwsImNvbHVtbnMiOmZhbHNlLCJiYWNrZ3JvdW5kQ29sb3IiOiIjMmMzNTY1IiwiY29sdW1uc0JhY2tncm91bmRDb2xvciI6IiIsImJhY2tncm91bmRJbWFnZSI6eyJ1cmwiOiIiLCJmdWxsV2lkdGgiOnRydWUsInJlcGVhdCI6InJlcGVhdCIsInNpemUiOiJjdXN0b20iLCJwb3NpdGlvbiI6InRvcC1sZWZ0IiwiY3VzdG9tUG9zaXRpb24iOlsiMCUiLCIwJSJdfSwicGFkZGluZyI6IjBweCIsImFuY2hvciI6IiIsImhpZGVEZXNrdG9wIjpmYWxzZSwiX21ldGEiOnsiaHRtbElEIjoidV9yb3dfMTciLCJodG1sQ2xhc3NOYW1lcyI6InVfcm93In0sInNlbGVjdGFibGUiOnRydWUsImRyYWdnYWJsZSI6dHJ1ZSwiZHVwbGljYXRhYmxlIjp0cnVlLCJkZWxldGFibGUiOnRydWUsImhpZGVhYmxlIjp0cnVlfX0seyJpZCI6ImJGclpCM3dwX3kiLCJjZWxscyI6WzFdLCJjb2x1bW5zIjpbeyJpZCI6ImdrVTd2aWp1UDIiLCJjb250ZW50cyI6W3siaWQiOiJaZ1VGX2R2TlY5IiwidHlwZSI6InRleHRfZGVwcmVjYXRlZCIsInZhbHVlcyI6eyJjb250YWluZXJQYWRkaW5nIjoiMzNweCA1NXB4IDQwcHgiLCJhbmNob3IiOiIiLCJ0ZXh0QWxpZ24iOiJjZW50ZXIiLCJsaW5lSGVpZ2h0IjoiMTYwJSIsImxpbmtTdHlsZSI6eyJpbmhlcml0Ijp0cnVlLCJsaW5rQ29sb3IiOiIjMDAwMGVlIiwibGlua0hvdmVyQ29sb3IiOiIjMDAwMGVlIiwibGlua1VuZGVybGluZSI6dHJ1ZSwibGlua0hvdmVyVW5kZXJsaW5lIjp0cnVlfSwiaGlkZURlc2t0b3AiOmZhbHNlLCJkaXNwbGF5Q29uZGl0aW9uIjpudWxsLCJfbWV0YSI6eyJodG1sSUQiOiJ1X2NvbnRlbnRfdGV4dF83IiwiaHRtbENsYXNzTmFtZXMiOiJ1X2NvbnRlbnRfdGV4dCJ9LCJzZWxlY3RhYmxlIjp0cnVlLCJkcmFnZ2FibGUiOnRydWUsImR1cGxpY2F0YWJsZSI6dHJ1ZSwiZGVsZXRhYmxlIjp0cnVlLCJoaWRlYWJsZSI6dHJ1ZSwiaGlkZU1vYmlsZSI6ZmFsc2UsInRleHQiOiI8cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPjxzcGFuIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4OyBsaW5lLWhlaWdodDogMjUuNnB4O1wiPlJFQ0VQQ0lPTiBERSBQRVRJQ0lPTkVTLCBRVUVKQVMsIFJFQ0xBTU9TIFkgU1VHRVJFTkNJQVM8L3NwYW4+PC9wPiJ9fSx7ImlkIjoiVmlnaGpETWE1ViIsInR5cGUiOiJ0ZXh0X2RlcHJlY2F0ZWQiLCJ2YWx1ZXMiOnsiY29udGFpbmVyUGFkZGluZyI6IjE1cHggNTVweCA0MHB4IiwiYW5jaG9yIjoiIiwidGV4dEFsaWduIjoiY2VudGVyIiwibGluZUhlaWdodCI6IjE2MCUiLCJsaW5rU3R5bGUiOnsiaW5oZXJpdCI6dHJ1ZSwibGlua0NvbG9yIjoiIzAwMDBlZSIsImxpbmtIb3ZlckNvbG9yIjoiIzAwMDBlZSIsImxpbmtVbmRlcmxpbmUiOnRydWUsImxpbmtIb3ZlclVuZGVybGluZSI6dHJ1ZX0sImhpZGVEZXNrdG9wIjpmYWxzZSwiZGlzcGxheUNvbmRpdGlvbiI6bnVsbCwiX21ldGEiOnsiaHRtbElEIjoidV9jb250ZW50X3RleHRfMTUiLCJodG1sQ2xhc3NOYW1lcyI6InVfY29udGVudF90ZXh0In0sInNlbGVjdGFibGUiOnRydWUsImRyYWdnYWJsZSI6dHJ1ZSwiZHVwbGljYXRhYmxlIjp0cnVlLCJkZWxldGFibGUiOnRydWUsImhpZGVhYmxlIjp0cnVlLCJoaWRlTW9iaWxlIjpmYWxzZSwidGV4dCI6IjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGNlbnRlcjtcIj48c3BhbiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweDsgbGluZS1oZWlnaHQ6IDI1LjZweDtcIj48c3Ryb25nPkluZm9ybWFjacOzbiBkZWwgcmVtaXRlbnRlPC9zdHJvbmc+PC9zcGFuPjwvcD5cbjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+Q29ycmVvPC9wPlxuPHAgc3R5bGU9XCJsaW5lLWhlaWdodDogMTYwJTsgdGV4dC1hbGlnbjoganVzdGlmeTtcIj7CoDwvcD5cbjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+Tm9tYnJlPC9wPlxuPHAgc3R5bGU9XCJsaW5lLWhlaWdodDogMTYwJTsgdGV4dC1hbGlnbjoganVzdGlmeTtcIj7CoDwvcD5cbjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+QXBlbGxpZG9zPC9wPlxuPHAgc3R5bGU9XCJsaW5lLWhlaWdodDogMTYwJTsgdGV4dC1hbGlnbjoganVzdGlmeTtcIj7CoDwvcD5cbjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+TnVtZXJvIGRlIGRvY3VtZW50bzwvcD5cbjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+wqA8L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPk51bWVybyBkZSBDb250YWN0bzwvcD5cbjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+wqA8L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBjZW50ZXI7XCI+wqA8L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBjZW50ZXI7XCI+PHN0cm9uZz48c3BhbiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweDsgbGluZS1oZWlnaHQ6IDI1LjZweDtcIj5JbmZvcm1hY2nDs24gZGVsIGNhc288L3NwYW4+PC9zdHJvbmc+PC9wPlxuPHAgc3R5bGU9XCJsaW5lLWhlaWdodDogMTYwJTsgdGV4dC1hbGlnbjoganVzdGlmeTtcIj50aXBvIGRlIHNvbGljaXR1ZDwvcD5cbjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+wqA8L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPmRvbmRlIHNlIHByZXNlbnRvIGVsIGV2ZW50bzwvcD5cbjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+wqA8L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPmZlY2hhIGRlbCBldmVudG88L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPsKgPC9wPlxuPHAgc3R5bGU9XCJsaW5lLWhlaWdodDogMTYwJTsgdGV4dC1hbGlnbjoganVzdGlmeTtcIj5kZXNjcmlwY2nDs248L3A+In19XSwidmFsdWVzIjp7Il9tZXRhIjp7Imh0bWxJRCI6InVfY29sdW1uXzQiLCJodG1sQ2xhc3NOYW1lcyI6InVfY29sdW1uIn0sImJvcmRlciI6eyJib3JkZXJUb3BXaWR0aCI6IjBweCIsImJvcmRlclRvcFN0eWxlIjoic29saWQiLCJib3JkZXJUb3BDb2xvciI6IiNDQ0MiLCJib3JkZXJMZWZ0V2lkdGgiOiIwcHgiLCJib3JkZXJMZWZ0U3R5bGUiOiJzb2xpZCIsImJvcmRlckxlZnRDb2xvciI6IiNDQ0MiLCJib3JkZXJSaWdodFdpZHRoIjoiMHB4IiwiYm9yZGVyUmlnaHRTdHlsZSI6InNvbGlkIiwiYm9yZGVyUmlnaHRDb2xvciI6IiNDQ0MiLCJib3JkZXJCb3R0b21XaWR0aCI6IjBweCIsImJvcmRlckJvdHRvbVN0eWxlIjoic29saWQiLCJib3JkZXJCb3R0b21Db2xvciI6IiNDQ0MifSwicGFkZGluZyI6IjBweCIsImJhY2tncm91bmRDb2xvciI6IiNmZmZmZmYifX1dLCJ2YWx1ZXMiOnsiZGlzcGxheUNvbmRpdGlvbiI6bnVsbCwiY29sdW1ucyI6ZmFsc2UsImJhY2tncm91bmRDb2xvciI6IiIsImNvbHVtbnNCYWNrZ3JvdW5kQ29sb3IiOiIjZmZmZmZmIiwiYmFja2dyb3VuZEltYWdlIjp7InVybCI6IiIsImZ1bGxXaWR0aCI6dHJ1ZSwicmVwZWF0Ijoibm8tcmVwZWF0Iiwic2l6ZSI6ImN1c3RvbSIsInBvc2l0aW9uIjoidG9wLWNlbnRlciIsImN1c3RvbVBvc2l0aW9uIjpbIjUwJSIsIjAlIl19LCJwYWRkaW5nIjoiMHB4IiwiYW5jaG9yIjoiIiwiaGlkZURlc2t0b3AiOmZhbHNlLCJfbWV0YSI6eyJodG1sSUQiOiJ1X3Jvd180IiwiaHRtbENsYXNzTmFtZXMiOiJ1X3JvdyJ9LCJzZWxlY3RhYmxlIjp0cnVlLCJkcmFnZ2FibGUiOnRydWUsImR1cGxpY2F0YWJsZSI6dHJ1ZSwiZGVsZXRhYmxlIjp0cnVlLCJoaWRlYWJsZSI6dHJ1ZSwiaGlkZU1vYmlsZSI6ZmFsc2UsIm5vU3RhY2tNb2JpbGUiOmZhbHNlfX0seyJpZCI6ImJsZmtQZGpqUGwiLCJjZWxscyI6WzFdLCJjb2x1bW5zIjpbeyJpZCI6IkRMRnBydHpXQVQiLCJjb250ZW50cyI6W3siaWQiOiJieUd3R0JsWG5pIiwidHlwZSI6InRleHRfZGVwcmVjYXRlZCIsInZhbHVlcyI6eyJjb250YWluZXJQYWRkaW5nIjoiMTBweCA0MHB4IiwiYW5jaG9yIjoiIiwidGV4dEFsaWduIjoibGVmdCIsImxpbmVIZWlnaHQiOiIxNDAlIiwibGlua1N0eWxlIjp7ImluaGVyaXQiOnRydWUsImxpbmtDb2xvciI6IiMwMDAwZWUiLCJsaW5rSG92ZXJDb2xvciI6IiMwMDAwZWUiLCJsaW5rVW5kZXJsaW5lIjp0cnVlLCJsaW5rSG92ZXJVbmRlcmxpbmUiOnRydWV9LCJoaWRlRGVza3RvcCI6ZmFsc2UsImRpc3BsYXlDb25kaXRpb24iOm51bGwsIl9tZXRhIjp7Imh0bWxJRCI6InVfY29udGVudF90ZXh0XzExIiwiaHRtbENsYXNzTmFtZXMiOiJ1X2NvbnRlbnRfdGV4dCJ9LCJzZWxlY3RhYmxlIjp0cnVlLCJkcmFnZ2FibGUiOnRydWUsImR1cGxpY2F0YWJsZSI6dHJ1ZSwiZGVsZXRhYmxlIjp0cnVlLCJoaWRlYWJsZSI6dHJ1ZSwidGV4dCI6IjxwIHN0eWxlPVwiZm9udC1zaXplOiAxNHB4OyBsaW5lLWhlaWdodDogMTQwJTsgdGV4dC1hbGlnbjogY2VudGVyO1wiPjxzdHJvbmc+PHNwYW4gc3R5bGU9XCJmb250LXNpemU6IDEycHg7IGxpbmUtaGVpZ2h0OiAxNi44cHg7XCI+RW52aWFkbyBwb3I8L3NwYW4+PC9zdHJvbmc+PC9wPlxuPHAgc3R5bGU9XCJmb250LXNpemU6IDE0cHg7IGxpbmUtaGVpZ2h0OiAxNDAlOyB0ZXh0LWFsaWduOiBjZW50ZXI7XCI+PHNwYW4gc3R5bGU9XCJmb250LXNpemU6IDEycHg7IGxpbmUtaGVpZ2h0OiAxNi44cHg7XCI+SnVhbiBTZWJhc3Rpw6FuIFJvZHJpZ3VleiBWYXJnYXo8L3NwYW4+PC9wPlxuPHAgc3R5bGU9XCJmb250LXNpemU6IDE0cHg7IGxpbmUtaGVpZ2h0OiAxNDAlOyB0ZXh0LWFsaWduOiBjZW50ZXI7XCI+PHNwYW4gc3R5bGU9XCJmb250LXNpemU6IDEycHg7IGxpbmUtaGVpZ2h0OiAxNi44cHg7XCI+PGEgcmVsPVwibm9vcGVuZXJcIiBocmVmPVwibWFpbHRvOmlzaXN0ZW1hc0BhdXRvbWFyY29sLmNvbVwiIHRhcmdldD1cIl9ibGFua1wiPmlzaXN0ZW1hc0BhdXRvbWFyY29sLmNvbTwvYT48L3NwYW4+PC9wPlxuPHAgc3R5bGU9XCJmb250LXNpemU6IDE0cHg7IGxpbmUtaGVpZ2h0OiAxNDAlOyB0ZXh0LWFsaWduOiBjZW50ZXI7XCI+PHNwYW4gc3R5bGU9XCJmb250LXNpemU6IDEycHg7IGxpbmUtaGVpZ2h0OiAxNi44cHg7XCI+KzU3IDMyMjI4NjM5Mzg8L3NwYW4+PC9wPiJ9fV0sInZhbHVlcyI6eyJfbWV0YSI6eyJodG1sSUQiOiJ1X2NvbHVtbl82IiwiaHRtbENsYXNzTmFtZXMiOiJ1X2NvbHVtbiJ9LCJib3JkZXIiOnsiYm9yZGVyVG9wV2lkdGgiOiIwcHgiLCJib3JkZXJUb3BTdHlsZSI6InNvbGlkIiwiYm9yZGVyTGVmdFdpZHRoIjoiMHB4IiwiYm9yZGVyTGVmdFN0eWxlIjoic29saWQiLCJib3JkZXJSaWdodFdpZHRoIjoiMHB4IiwiYm9yZGVyUmlnaHRTdHlsZSI6InNvbGlkIiwiYm9yZGVyQm90dG9tV2lkdGgiOiIwcHgiLCJib3JkZXJCb3R0b21TdHlsZSI6InNvbGlkIn0sInBhZGRpbmciOiIwcHgiLCJiYWNrZ3JvdW5kQ29sb3IiOiIifX1dLCJ2YWx1ZXMiOnsiZGlzcGxheUNvbmRpdGlvbiI6bnVsbCwiY29sdW1ucyI6ZmFsc2UsImJhY2tncm91bmRDb2xvciI6IiIsImNvbHVtbnNCYWNrZ3JvdW5kQ29sb3IiOiIiLCJiYWNrZ3JvdW5kSW1hZ2UiOnsidXJsIjoiIiwiZnVsbFdpZHRoIjp0cnVlLCJyZXBlYXQiOiJuby1yZXBlYXQiLCJzaXplIjoiY3VzdG9tIiwicG9zaXRpb24iOiJ0b3AtY2VudGVyIiwiY3VzdG9tUG9zaXRpb24iOlsiNTAlIiwiMCUiXX0sInBhZGRpbmciOiIwcHgiLCJhbmNob3IiOiIiLCJoaWRlRGVza3RvcCI6ZmFsc2UsIl9tZXRhIjp7Imh0bWxJRCI6InVfcm93XzYiLCJodG1sQ2xhc3NOYW1lcyI6InVfcm93In0sInNlbGVjdGFibGUiOnRydWUsImRyYWdnYWJsZSI6dHJ1ZSwiZHVwbGljYXRhYmxlIjp0cnVlLCJkZWxldGFibGUiOnRydWUsImhpZGVhYmxlIjp0cnVlLCJoaWRlTW9iaWxlIjpmYWxzZSwibm9TdGFja01vYmlsZSI6ZmFsc2V9fV0sInZhbHVlcyI6eyJwb3B1cFBvc2l0aW9uIjoiY2VudGVyIiwicG9wdXBXaWR0aCI6IjYwMHB4IiwicG9wdXBIZWlnaHQiOiJhdXRvIiwiYm9yZGVyUmFkaXVzIjoiMTBweCIsImNvbnRlbnRBbGlnbiI6ImNlbnRlciIsImNvbnRlbnRWZXJ0aWNhbEFsaWduIjoiY2VudGVyIiwiY29udGVudFdpZHRoIjoiNjAwcHgiLCJmb250RmFtaWx5Ijp7ImxhYmVsIjoiVmVyZGFuYSIsInZhbHVlIjoidmVyZGFuYSxnZW5ldmEiLCJ1cmwiOiIiLCJkZWZhdWx0Rm9udCI6dHJ1ZX0sInRleHRDb2xvciI6IiMwMDAwMDAiLCJwb3B1cEJhY2tncm91bmRDb2xvciI6IiNGRkZGRkYiLCJwb3B1cEJhY2tncm91bmRJbWFnZSI6eyJ1cmwiOiIiLCJmdWxsV2lkdGgiOnRydWUsInJlcGVhdCI6Im5vLXJlcGVhdCIsInNpemUiOiJjb3ZlciIsInBvc2l0aW9uIjoidG9wLWNlbnRlciIsImN1c3RvbVBvc2l0aW9uIjpbIjUwJSIsIjAlIl19LCJwb3B1cE92ZXJsYXlfYmFja2dyb3VuZENvbG9yIjoicmdiYSgwLCAwLCAwLCAwLjEpIiwicG9wdXBDbG9zZUJ1dHRvbl9wb3NpdGlvbiI6InRvcC1yaWdodCIsInBvcHVwQ2xvc2VCdXR0b25fYmFja2dyb3VuZENvbG9yIjoiI0RERERERCIsInBvcHVwQ2xvc2VCdXR0b25faWNvbkNvbG9yIjoiIzAwMDAwMCIsInBvcHVwQ2xvc2VCdXR0b25fYm9yZGVyUmFkaXVzIjoiMHB4IiwicG9wdXBDbG9zZUJ1dHRvbl9tYXJnaW4iOiIwcHgiLCJwb3B1cENsb3NlQnV0dG9uX2FjdGlvbiI6eyJuYW1lIjoiY2xvc2VfcG9wdXAiLCJhdHRycyI6eyJvbkNsaWNrIjoiZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnUtcG9wdXAtY29udGFpbmVyJykuc3R5bGUuZGlzcGxheSA9ICdub25lJzsifX0sImJhY2tncm91bmRDb2xvciI6IiNmNGYyZjUiLCJiYWNrZ3JvdW5kSW1hZ2UiOnsidXJsIjoiIiwiZnVsbFdpZHRoIjp0cnVlLCJyZXBlYXQiOiJuby1yZXBlYXQiLCJzaXplIjoiY3VzdG9tIiwicG9zaXRpb24iOiJ0b3AtY2VudGVyIiwiY3VzdG9tUG9zaXRpb24iOlsiNTAlIiwiMCUiXX0sInByZWhlYWRlclRleHQiOiIiLCJsaW5rU3R5bGUiOnsiYm9keSI6dHJ1ZSwibGlua0NvbG9yIjoiIzM1OThkYiIsImxpbmtIb3ZlckNvbG9yIjoiIzAwMDBlZSIsImxpbmtVbmRlcmxpbmUiOmZhbHNlLCJsaW5rSG92ZXJVbmRlcmxpbmUiOnRydWUsImluaGVyaXQiOmZhbHNlfSwiX21ldGEiOnsiaHRtbElEIjoidV9ib2R5IiwiaHRtbENsYXNzTmFtZXMiOiJ1X2JvZHkifX19LCJzY2hlbWFWZXJzaW9uIjoxMn0=">
<!--[if gte mso 9]>
<xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
</xml>
<![endif]-->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="x-apple-disable-message-reformatting">
  <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
  <title></title>
  
    <style type="text/css">
      @media only screen and (min-width: 620px) {
  .u-row {
    width: 600px !important;
  }
  .u-row .u-col {
    vertical-align: top;
  }

  .u-row .u-col-100 {
    width: 600px !important;
  }

}

@media (max-width: 620px) {
  .u-row-container {
    max-width: 100% !important;
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  .u-row .u-col {
    min-width: 320px !important;
    max-width: 100% !important;
    display: block !important;
  }
  .u-row {
    width: 100% !important;
  }
  .u-col {
    width: 100% !important;
  }
  .u-col > div {
    margin: 0 auto;
  }
}
body {
  margin: 0;
  padding: 0;
}

table,
tr,
td {
  vertical-align: top;
  border-collapse: collapse;
}

p {
  margin: 0;
}

.ie-container table,
.mso-container table {
  table-layout: fixed;
}

* {
  line-height: inherit;
}

a[x-apple-data-detectors="true"] {
  color: inherit !important;
  text-decoration: none !important;
}

table, td { color: #000000; } #u_body a { color: #3598db; text-decoration: none; }
    </style>
  
  

</head>

<body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f4f2f5;color: #000000">
  <!--[if IE]><div class="ie-container"><![endif]-->
  <!--[if mso]><div class="mso-container"><![endif]-->
  <table id="u_body" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f4f2f5;width:100%" cellpadding="0" cellspacing="0">
  <tbody>
  <tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #f4f2f5;"><![endif]-->
    

<div class="u-row-container" style="padding: 0px;background-color: #2c3565">
  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #2c3565;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
      
<!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
  <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
  <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
  
<table style="font-family:verdana,geneva;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:35px;font-family:verdana,geneva;" align="left">
        
  <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="0%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
    <tbody>
      <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
          <span>&nbsp;</span>
        </td>
      </tr>
    </tbody>
  </table>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class="u-row-container" style="padding: 0px;background-color: #2c3565">
  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #2c3565;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
      
<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color: #ffffff;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
  <div style="background-color: #ffffff;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
  <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
  
<table style="font-family:verdana,geneva;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:verdana,geneva;" align="left">
        
  <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="0%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
    <tbody>
      <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
          <span>&nbsp;</span>
        </td>
      </tr>
    </tbody>
  </table>

      </td>
    </tr>
  </tbody>
</table>

<table style="font-family:verdana,geneva;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:verdana,geneva;" align="left">
        
<table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tbody><tr>
    <td style="padding-right: 0px;padding-left: 0px;" align="center">
      
      <img align="center" border="0" src="https://share1.cloudhq-mkt3.net/84e4bd32716717.png" alt="" title="" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 42%;max-width: 243.6px;" width="243.6">
      
    </td>
  </tr>
</tbody></table>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class="u-row-container" style="padding: 0px;background-color: transparent">
  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->
      
<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color: #ffffff;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
  <div style="background-color: #ffffff;height: 100%;width: 100% !important;">
  <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
  
<table style="font-family:verdana,geneva;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:33px 55px 40px;font-family:verdana,geneva;" align="left">
        
  <div style="line-height: 160%; text-align: center; word-wrap: break-word;">
    <p style="line-height: 160%; text-align: justify; margin: 0px;"><span style="font-size: 16px; line-height: 25.6px;">RECEPCION DE PETICIONES, QUEJAS, RECLAMOS Y SUGERENCIAS</span></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

<table style="font-family:verdana,geneva;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:15px 55px 40px;font-family:verdana,geneva;" align="left">
        
  <div style="line-height: 160%; text-align: center; word-wrap: break-word;">
    <p style="line-height: 160%; text-align: center; margin: 0px;"><span style="font-size: 16px; line-height: 25.6px;"><strong>Información del remitente</strong></span></p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">Correo</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">'.$email.'</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">&nbsp;</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">Nombre</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">'.$nombre.'</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">&nbsp;</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">Apellidos</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">'.$apellidos.'</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">&nbsp;</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">Numero de documento</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">'.$documento.'</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">&nbsp;</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">Numero de Contacto</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">'.$contacto.'</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">&nbsp;</p>
<p style="line-height: 160%; text-align: center; margin: 0px;">&nbsp;</p>
<p style="line-height: 160%; text-align: center; margin: 0px;"><strong><span style="font-size: 16px; line-height: 25.6px;">Información del caso</span></strong></p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">tipo de solicitud</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">'.$solicitud.'</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">&nbsp;</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">donde se presento el evento</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">'.$evento_lugar.'</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">&nbsp;</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">fecha del evento</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">'.$evento_fecha.'</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">&nbsp;</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">descripción</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">'.$descripcion.'</p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class="u-row-container" style="padding: 0px;background-color: transparent">
  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
      
<!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
  <div style="height: 100%;width: 100% !important;">
  <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
  
<table style="font-family:verdana,geneva;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px 40px;font-family:verdana,geneva;" align="left">
        
  <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
    <p style="font-size: 14px; line-height: 140%; text-align: center; margin: 0px;"><strong><span style="font-size: 12px; line-height: 16.8px;">Enviado por</span></strong></p>
<p style="font-size: 14px; line-height: 140%; text-align: center; margin: 0px;"><span style="font-size: 12px; line-height: 16.8px;">Juan Sebastián Rodriguez Vargaz</span></p>
<p style="font-size: 14px; line-height: 140%; text-align: center; margin: 0px;"><span style="font-size: 12px; line-height: 16.8px;"><a rel="noopener" href="mailto:isistemas@automarcol.com" target="_blank">isistemas@automarcol.com</a></span></p>
<p style="font-size: 14px; line-height: 140%; text-align: center; margin: 0px;"><span style="font-size: 12px; line-height: 16.8px;">+57 3222863938</span></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>


    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    </td>
  </tr>
  </tbody>
  </table>
  <!--[if mso]></div><![endif]-->
  <!--[if IE]></div><![endif]-->


</body></html>';

   $cabeceras = 'MIME-Version: 1.0' . "\r\n" .
       'Content-type: text/html; charset=utf-8' . "\r\n" .
       'Reply-To:'.$correo . "\r\n" .
       'CC: isistemas@automarcol.com' . "\r\n" .
       'X-Mailer: PHP/' . phpversion();
   mail($para, $titulo, $mensaje, $cabeceras);

   unset($_POST['PQR']);
   $response = "<script> enviado(); </script>";
}
?>
<style>
.form-control {
    background-color: #F8F9F9;
    padding: 4px;
    border-radius: 5px;
    font-size: 15px;
}

.formulario {
    max-width: 60rem;
}

#pop-up-message-circle {
    background-color: var(--main) !important;
}

.bg-dark {
    background-color: #2c3b6d !important;
}
</style>
<br><br><br><br><br><br>
<section class="bg-gray bg-form" id="pqr">
    <div class="row">
        <div class="p-4">
            <h2 class="fs-1 fw-bold text-center "><i class='bx bx-check-shield'></i></h2>
            <h2 class="text-center">Formulario de Peticiones, Quejas y Reclamos (PQR)</h2>
            <h2 class="fs-3 text-muted text-center">Para nosotros es muy importante conocer tu opinión, completa los
                siguientes
                campos y pronto nos
                pondremos en
                contacto contigo.</h2>
        </div>
        <div class="col-sm-12 col-md-6 bg-white p-4 fs-3 rounded mx-auto formulario"
            style=" box-shadow: 0 4px 80px rgb(38 25 88 / 10%) !important;">
            <form class="p-2 m-2" method="POST">
                <div class=" rounded p-4 mb-2">
                    <h2 class="text-center text-muted">Informacion del cliente</h2>
                    <div class="mb-3 mt-2">
                        <label for="correo" class="form-label">Correo</label>
                        <input required type="email" class="form-control" name="correo" aria-describedby="textHelp">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input required type="text" class="form-control" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input required type="text" class="form-control" name="apellidos">
                    </div>
                    <div class="mb-3">
                        <label for="documento" class="form-label">Numero de documento</label>
                        <input required type="text" class="form-control" name="documento">
                    </div>
                    <div class="mb-3">
                        <label for="contacto" class="form-label">Numero de contacto</label>
                        <input required type="text" class="form-control" name="contacto">
                    </div>
                </div>
                <div class=" rounded p-4 pt-2">
                    <h2 class="text-center text-muted">Informacion del caso</h2>
                    <div class="mb-3 mt-2">
                        <label for="solicitud" class="form-label">Tipo de solicitud</label>
                        <select required name='solicitud' class="form-select form-control"
                            aria-label="Default select example">
                            <option value="Queja">Queja</option>
                            <option value="Reclamo">Reclamo</option>
                            <option value="Peticion">Petición</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">¿Donde se presento el evento?</label>
                        <input required type="text" class="form-control" name="evento_lugar">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Fecha del evento</label>
                        <input required type="date" class="form-control" name="evento_fecha">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                        <textarea class="form-control" name="descripcion" rows="8"></textarea>
                    </div>
                </div>
                <div class="form-check form-switch m-2">
                    <input required class="form-check-input" type="checkbox" name='tratamiento' role="switch"
                        id="flexSwitchCheckChecked">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Autorizo el tratamiento de mis datos
                        personales
                    </label>

                </div>
                <div class="accordion accordion-flush mb-2" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed fs-3 bg-light text-black" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Leer Terminos y condiciones
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fs-4 text-muted text-justify bg-light"> De conformidad con lo
                                dispuesto en la ley
                                1581 de 2012 y el
                                decreto 1377 de 2013, declaro
                                que entrego de forma libre y voluntaria mis datos personales, para su respectivo
                                tratamiento
                                por parte de AUTOMARCOL S.A.S o sus empresas aliadas (Descritas en la
                                política de
                                tratamiento de datos personales). La autorización expresa se circunscribe a las
                                siguientes
                                ﬁnalidades: Medir niveles de satisfacción, informar sobre campañas de servicio,
                                comunicar
                                campañas promocionales, realizar encuestas, realizar recordatorio para
                                mantenimientos,
                                ejecutar campañas de fidelización de clientes, enviar invitaciones a eventos, rifas,
                                realizar actualización de datos, invitar a pruebas de vehículos, ofrecimiento de
                                productos y
                                servicios, comunicar noticias de sus marcas y de la red de ventas y servicios,
                                comunicar
                                información relacionada con productos para la ﬁnanciación en la adquisición de
                                nuestros
                                bienes y servicios.</div>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-dark fs-2" name='PQR' type="submit">Generar PQR</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
function enviado() {
    swal({
        title: 'Su peticion fue enviada',
        text: 'Nos contactaremos muy pronto contigo',
        icon: "success",
        buttons: {
            catch: {
                text: "Aceptar",
                value: "true",
            },
        },
    })

}
</script>
<?php if (isset($response)) {
    echo $response;
} ?>
<?php include'./includes/components/footer.php';?>