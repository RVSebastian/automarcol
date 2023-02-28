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
   $mensaje = '
   <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><meta name="__cloudhq_email_draft_json" content="eyJjb3VudGVycyI6eyJ1X3JvdyI6MTgsInVfY29sdW1uIjoyNywidV9jb250ZW50X3RleHQiOjE2LCJ1X2NvbnRlbnRfaW1hZ2UiOjIxLCJ1X2NvbnRlbnRfYnV0dG9uIjoxLCJ1X2NvbnRlbnRfc29jaWFsIjoxLCJ1X2NvbnRlbnRfdmlkZW8iOjEsInVfY29udGVudF9kaXZpZGVyIjoxMCwidV9jb250ZW50X2N1c3RvbV9wb2xsIjoxLCJ1X2NvbnRlbnRfY3VzdG9tX2Jvb2tfbWUiOjEsInVfY29udGVudF90aW1lciI6MSwidV9jb250ZW50X21lbnUiOjEsInVfY29udGVudF90ZXh0X2RlcHJlY2F0ZWQiOjJ9LCJib2R5Ijp7ImlkIjoiRjBzdEdvbkZVTSIsInJvd3MiOlt7ImlkIjoicXE1RjdtZGRseCIsImNlbGxzIjpbMV0sImNvbHVtbnMiOlt7ImlkIjoiSlVpcnR2bXdmMSIsImNvbnRlbnRzIjpbeyJpZCI6Ii1CdWhWZDhMaVciLCJ0eXBlIjoiZGl2aWRlciIsInZhbHVlcyI6eyJ3aWR0aCI6IjAlIiwiYm9yZGVyIjp7ImJvcmRlclRvcFdpZHRoIjoiMXB4IiwiYm9yZGVyVG9wU3R5bGUiOiJzb2xpZCIsImJvcmRlclRvcENvbG9yIjoiI0JCQkJCQiJ9LCJ0ZXh0QWxpZ24iOiJjZW50ZXIiLCJjb250YWluZXJQYWRkaW5nIjoiMzVweCIsImFuY2hvciI6IiIsImhpZGVEZXNrdG9wIjpmYWxzZSwiZGlzcGxheUNvbmRpdGlvbiI6bnVsbCwiX21ldGEiOnsiaHRtbElEIjoidV9jb250ZW50X2RpdmlkZXJfNiIsImh0bWxDbGFzc05hbWVzIjoidV9jb250ZW50X2RpdmlkZXIifSwic2VsZWN0YWJsZSI6dHJ1ZSwiZHJhZ2dhYmxlIjp0cnVlLCJkdXBsaWNhdGFibGUiOnRydWUsImRlbGV0YWJsZSI6dHJ1ZSwiaGlkZWFibGUiOnRydWV9fV0sInZhbHVlcyI6eyJiYWNrZ3JvdW5kQ29sb3IiOiIiLCJwYWRkaW5nIjoiMHB4IiwiYm9yZGVyIjp7fSwiYm9yZGVyUmFkaXVzIjoiMHB4IiwiX21ldGEiOnsiaHRtbElEIjoidV9jb2x1bW5fMjQiLCJodG1sQ2xhc3NOYW1lcyI6InVfY29sdW1uIn19fV0sInZhbHVlcyI6eyJkaXNwbGF5Q29uZGl0aW9uIjpudWxsLCJjb2x1bW5zIjpmYWxzZSwiYmFja2dyb3VuZENvbG9yIjoiIzJjMzU2NSIsImNvbHVtbnNCYWNrZ3JvdW5kQ29sb3IiOiIiLCJiYWNrZ3JvdW5kSW1hZ2UiOnsidXJsIjoiIiwiZnVsbFdpZHRoIjp0cnVlLCJyZXBlYXQiOiJyZXBlYXQiLCJzaXplIjoiY3VzdG9tIiwicG9zaXRpb24iOiJ0b3AtbGVmdCIsImN1c3RvbVBvc2l0aW9uIjpbIjAlIiwiMCUiXX0sInBhZGRpbmciOiIwcHgiLCJhbmNob3IiOiIiLCJoaWRlRGVza3RvcCI6ZmFsc2UsIl9tZXRhIjp7Imh0bWxJRCI6InVfcm93XzE1IiwiaHRtbENsYXNzTmFtZXMiOiJ1X3JvdyJ9LCJzZWxlY3RhYmxlIjp0cnVlLCJkcmFnZ2FibGUiOnRydWUsImR1cGxpY2F0YWJsZSI6dHJ1ZSwiZGVsZXRhYmxlIjp0cnVlLCJoaWRlYWJsZSI6dHJ1ZX19LHsiaWQiOiJiNU5vNjJ6NlU3IiwiY2VsbHMiOlsxXSwiY29sdW1ucyI6W3siaWQiOiJvNDJwckxmQ20zIiwiY29udGVudHMiOlt7ImlkIjoiVmdEX0lOQTNOYiIsInR5cGUiOiJkaXZpZGVyIiwidmFsdWVzIjp7IndpZHRoIjoiMCUiLCJib3JkZXIiOnsiYm9yZGVyVG9wV2lkdGgiOiIwcHgiLCJib3JkZXJUb3BTdHlsZSI6ImRvdHRlZCIsImJvcmRlclRvcENvbG9yIjoiI0JCQkJCQiJ9LCJ0ZXh0QWxpZ24iOiJjZW50ZXIiLCJjb250YWluZXJQYWRkaW5nIjoiMjVweCIsImFuY2hvciI6IiIsImhpZGVEZXNrdG9wIjpmYWxzZSwiZGlzcGxheUNvbmRpdGlvbiI6bnVsbCwiX21ldGEiOnsiaHRtbElEIjoidV9jb250ZW50X2RpdmlkZXJfNyIsImh0bWxDbGFzc05hbWVzIjoidV9jb250ZW50X2RpdmlkZXIifSwic2VsZWN0YWJsZSI6dHJ1ZSwiZHJhZ2dhYmxlIjp0cnVlLCJkdXBsaWNhdGFibGUiOnRydWUsImRlbGV0YWJsZSI6dHJ1ZSwiaGlkZWFibGUiOnRydWV9fV0sInZhbHVlcyI6eyJiYWNrZ3JvdW5kQ29sb3IiOiIjZmZmZmZmIiwicGFkZGluZyI6IjBweCIsImJvcmRlciI6e30sImJvcmRlclJhZGl1cyI6IjBweCIsIl9tZXRhIjp7Imh0bWxJRCI6InVfY29sdW1uXzI2IiwiaHRtbENsYXNzTmFtZXMiOiJ1X2NvbHVtbiJ9fX1dLCJ2YWx1ZXMiOnsiZGlzcGxheUNvbmRpdGlvbiI6bnVsbCwiY29sdW1ucyI6ZmFsc2UsImJhY2tncm91bmRDb2xvciI6IiMyYzM1NjUiLCJjb2x1bW5zQmFja2dyb3VuZENvbG9yIjoiIiwiYmFja2dyb3VuZEltYWdlIjp7InVybCI6IiIsImZ1bGxXaWR0aCI6dHJ1ZSwicmVwZWF0IjoicmVwZWF0Iiwic2l6ZSI6ImN1c3RvbSIsInBvc2l0aW9uIjoidG9wLWxlZnQiLCJjdXN0b21Qb3NpdGlvbiI6WyIwJSIsIjAlIl19LCJwYWRkaW5nIjoiMHB4IiwiYW5jaG9yIjoiIiwiaGlkZURlc2t0b3AiOmZhbHNlLCJfbWV0YSI6eyJodG1sSUQiOiJ1X3Jvd18xNyIsImh0bWxDbGFzc05hbWVzIjoidV9yb3cifSwic2VsZWN0YWJsZSI6dHJ1ZSwiZHJhZ2dhYmxlIjp0cnVlLCJkdXBsaWNhdGFibGUiOnRydWUsImRlbGV0YWJsZSI6dHJ1ZSwiaGlkZWFibGUiOnRydWV9fSx7ImlkIjoiYkZyWkIzd3BfeSIsImNlbGxzIjpbMV0sImNvbHVtbnMiOlt7ImlkIjoiZ2tVN3ZpanVQMiIsImNvbnRlbnRzIjpbeyJpZCI6IlZpZ2hqRE1hNVYiLCJ0eXBlIjoidGV4dF9kZXByZWNhdGVkIiwidmFsdWVzIjp7ImNvbnRhaW5lclBhZGRpbmciOiIxNXB4IDU1cHggMXB4IiwiYW5jaG9yIjoiIiwidGV4dEFsaWduIjoiY2VudGVyIiwibGluZUhlaWdodCI6IjE2MCUiLCJsaW5rU3R5bGUiOnsiaW5oZXJpdCI6dHJ1ZSwibGlua0NvbG9yIjoiIzAwMDBlZSIsImxpbmtIb3ZlckNvbG9yIjoiIzAwMDBlZSIsImxpbmtVbmRlcmxpbmUiOnRydWUsImxpbmtIb3ZlclVuZGVybGluZSI6dHJ1ZX0sImhpZGVEZXNrdG9wIjpmYWxzZSwiZGlzcGxheUNvbmRpdGlvbiI6bnVsbCwiX21ldGEiOnsiaHRtbElEIjoidV9jb250ZW50X3RleHRfMTUiLCJodG1sQ2xhc3NOYW1lcyI6InVfY29udGVudF90ZXh0In0sInNlbGVjdGFibGUiOnRydWUsImRyYWdnYWJsZSI6dHJ1ZSwiZHVwbGljYXRhYmxlIjp0cnVlLCJkZWxldGFibGUiOnRydWUsImhpZGVhYmxlIjp0cnVlLCJoaWRlTW9iaWxlIjpmYWxzZSwidGV4dCI6IjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+PHNwYW4gc3R5bGU9XCJjb2xvcjogIzJlMzk5NTsgbGluZS1oZWlnaHQ6IDIyLjRweDtcIj48c3Ryb25nPjxzcGFuIHN0eWxlPVwiZm9udC1zaXplOiAyNnB4OyBsaW5lLWhlaWdodDogNDEuNnB4O1wiPlBRUlMgI3tudW1lcm99IFJFQ0lCSURPPC9zcGFuPjwvc3Ryb25nPjwvc3Bhbj48L3A+In19LHsiaWQiOiJpQkFPUE00Mm5oIiwidHlwZSI6ImltYWdlIiwidmFsdWVzIjp7ImNvbnRhaW5lclBhZGRpbmciOiIwcHgiLCJhbmNob3IiOiIiLCJzcmMiOnsidXJsIjoiaHR0cHM6Ly9zaGFyZTEuY2xvdWRocS1ta3QzLm5ldC83MWJiMDA3ODA2ZmJiNi5naWYiLCJ3aWR0aCI6MTE1MiwiaGVpZ2h0Ijo2NDh9LCJ0ZXh0QWxpZ24iOiJjZW50ZXIiLCJhbHRUZXh0IjoiIiwiYWN0aW9uIjp7Im5hbWUiOiJ3ZWIiLCJ2YWx1ZXMiOnsiaHJlZiI6IiIsInRhcmdldCI6Il9ibGFuayJ9fSwiaGlkZURlc2t0b3AiOmZhbHNlLCJkaXNwbGF5Q29uZGl0aW9uIjpudWxsLCJfbWV0YSI6eyJodG1sSUQiOiJ1X2NvbnRlbnRfaW1hZ2VfMjEiLCJodG1sQ2xhc3NOYW1lcyI6InVfY29udGVudF9pbWFnZSJ9LCJzZWxlY3RhYmxlIjp0cnVlLCJkcmFnZ2FibGUiOnRydWUsImR1cGxpY2F0YWJsZSI6dHJ1ZSwiZGVsZXRhYmxlIjp0cnVlLCJoaWRlYWJsZSI6dHJ1ZX19LHsiaWQiOiJieTlfQjRIdWJmIiwidHlwZSI6InRleHRfZGVwcmVjYXRlZCIsInZhbHVlcyI6eyJjb250YWluZXJQYWRkaW5nIjoiMTVweCA1NXB4IDQwcHgiLCJhbmNob3IiOiIiLCJ0ZXh0QWxpZ24iOiJjZW50ZXIiLCJsaW5lSGVpZ2h0IjoiMTYwJSIsImxpbmtTdHlsZSI6eyJpbmhlcml0Ijp0cnVlLCJsaW5rQ29sb3IiOiIjMDAwMGVlIiwibGlua0hvdmVyQ29sb3IiOiIjMDAwMGVlIiwibGlua1VuZGVybGluZSI6dHJ1ZSwibGlua0hvdmVyVW5kZXJsaW5lIjp0cnVlfSwiaGlkZURlc2t0b3AiOmZhbHNlLCJkaXNwbGF5Q29uZGl0aW9uIjpudWxsLCJfbWV0YSI6eyJodG1sSUQiOiJ1X2NvbnRlbnRfdGV4dF9kZXByZWNhdGVkXzIiLCJodG1sQ2xhc3NOYW1lcyI6InVfY29udGVudF90ZXh0In0sInNlbGVjdGFibGUiOnRydWUsImRyYWdnYWJsZSI6dHJ1ZSwiZHVwbGljYXRhYmxlIjp0cnVlLCJkZWxldGFibGUiOnRydWUsImhpZGVhYmxlIjp0cnVlLCJoaWRlTW9iaWxlIjpmYWxzZSwidGV4dCI6IjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+U2XDsW9yL2Ege25vbWJyZX0sIFN1IFBRUlMgaGEgc2lkbyBnZW5lcmFkbyBjb24gw6l4aXRvIHkgcHJvbnRvIHNlIHRlIGRhcsOhIHNvbHVjacOzbiBhIHR1IHNvbGljaXR1ZCwgQSBwYXJ0aXIgZGVsIGTDrWEgc2lndWllbnRlIGEgbGEgZmVjaGEgZGUgcmFkaWNhY2nDs24gZGUgdHUgUFFSLCBlbCBwcm92ZWVkb3IgY3VlbnRhIGNvbiAxNSBkw61hcyBow6FiaWxlcyBwYXJhIGRhcnRlIHJlc3B1ZXN0YSwgZXN0ZSB0w6lybWlubyBwb2Ryw6EgYW1wbGlhcnNlIGhhc3RhIHBvciAxNSBkw61hcyBow6FiaWxlcyBtw6FzLCBjdWFuZG8gc2VhIG5lY2VzYXJpYSBsYSBwcsOhY3RpY2EgZGUgcHJ1ZWJhcyBvIGNvbXBsZW1lbnRhY2nDs24gZGUgaW5mb3JtYWNpw7NuLCBsbyBjdWFsIGRlYmUgc2VyIHByZXZpYW1lbnRlIGluZm9ybWFkbyBwb3IgcGFydGUgZGVsIG9wZXJhZG9yLjwvcD5cbjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+wqA8L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPmxhIGluZm9ybWFjacOzbiBzdW1pbmlzdHJhZGEgcGFyYSBlc3RlIGNhc28gZXMgbGEgc2lndWllbnRlOjwvcD5cbjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+wqA8L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPk5vbWJyZXM6PC9wPlxuPHAgc3R5bGU9XCJsaW5lLWhlaWdodDogMTYwJTsgdGV4dC1hbGlnbjoganVzdGlmeTtcIj5UaXBvIGRlIHNvbGljaXR1ZDo8L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPkx1Z2FyIGRlbCBldmVudG86PC9wPlxuPHAgc3R5bGU9XCJsaW5lLWhlaWdodDogMTYwJTsgdGV4dC1hbGlnbjoganVzdGlmeTtcIj5GZWNoYSBkZWwgRXZlbnRvOjwvcD5cbjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+RGVzY3JpcGNpw7NuOjwvcD5cbjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+wqA8L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPsKgPC9wPlxuPHAgc3R5bGU9XCJsaW5lLWhlaWdodDogMTYwJTsgdGV4dC1hbGlnbjoganVzdGlmeTtcIj7CoDwvcD4ifX1dLCJ2YWx1ZXMiOnsiX21ldGEiOnsiaHRtbElEIjoidV9jb2x1bW5fNCIsImh0bWxDbGFzc05hbWVzIjoidV9jb2x1bW4ifSwiYm9yZGVyIjp7ImJvcmRlclRvcFdpZHRoIjoiMHB4IiwiYm9yZGVyVG9wU3R5bGUiOiJzb2xpZCIsImJvcmRlckxlZnRXaWR0aCI6IjBweCIsImJvcmRlckxlZnRTdHlsZSI6InNvbGlkIiwiYm9yZGVyUmlnaHRXaWR0aCI6IjBweCIsImJvcmRlclJpZ2h0U3R5bGUiOiJzb2xpZCIsImJvcmRlckJvdHRvbVdpZHRoIjoiMHB4IiwiYm9yZGVyQm90dG9tU3R5bGUiOiJzb2xpZCJ9LCJwYWRkaW5nIjoiMHB4IiwiYmFja2dyb3VuZENvbG9yIjoiI2ZmZmZmZiJ9fV0sInZhbHVlcyI6eyJkaXNwbGF5Q29uZGl0aW9uIjpudWxsLCJjb2x1bW5zIjpmYWxzZSwiYmFja2dyb3VuZENvbG9yIjoiIiwiY29sdW1uc0JhY2tncm91bmRDb2xvciI6IiNmZmZmZmYiLCJiYWNrZ3JvdW5kSW1hZ2UiOnsidXJsIjoiIiwiZnVsbFdpZHRoIjp0cnVlLCJyZXBlYXQiOiJuby1yZXBlYXQiLCJzaXplIjoiY3VzdG9tIiwicG9zaXRpb24iOiJ0b3AtY2VudGVyIiwiY3VzdG9tUG9zaXRpb24iOlsiNTAlIiwiMCUiXX0sInBhZGRpbmciOiIwcHgiLCJhbmNob3IiOiIiLCJoaWRlRGVza3RvcCI6ZmFsc2UsIl9tZXRhIjp7Imh0bWxJRCI6InVfcm93XzQiLCJodG1sQ2xhc3NOYW1lcyI6InVfcm93In0sInNlbGVjdGFibGUiOnRydWUsImRyYWdnYWJsZSI6dHJ1ZSwiZHVwbGljYXRhYmxlIjp0cnVlLCJkZWxldGFibGUiOnRydWUsImhpZGVhYmxlIjp0cnVlLCJoaWRlTW9iaWxlIjpmYWxzZSwibm9TdGFja01vYmlsZSI6ZmFsc2V9fSx7ImlkIjoiYmxma1BkampQbCIsImNlbGxzIjpbMV0sImNvbHVtbnMiOlt7ImlkIjoiRExGcHJ0eldBVCIsImNvbnRlbnRzIjpbeyJpZCI6ImJ5R3dHQmxYbmkiLCJ0eXBlIjoidGV4dF9kZXByZWNhdGVkIiwidmFsdWVzIjp7ImNvbnRhaW5lclBhZGRpbmciOiIxMHB4IDQwcHgiLCJhbmNob3IiOiIiLCJ0ZXh0QWxpZ24iOiJsZWZ0IiwibGluZUhlaWdodCI6IjE0MCUiLCJsaW5rU3R5bGUiOnsiaW5oZXJpdCI6dHJ1ZSwibGlua0NvbG9yIjoiIzAwMDBlZSIsImxpbmtIb3ZlckNvbG9yIjoiIzAwMDBlZSIsImxpbmtVbmRlcmxpbmUiOnRydWUsImxpbmtIb3ZlclVuZGVybGluZSI6dHJ1ZX0sImhpZGVEZXNrdG9wIjpmYWxzZSwiZGlzcGxheUNvbmRpdGlvbiI6bnVsbCwiX21ldGEiOnsiaHRtbElEIjoidV9jb250ZW50X3RleHRfMTEiLCJodG1sQ2xhc3NOYW1lcyI6InVfY29udGVudF90ZXh0In0sInNlbGVjdGFibGUiOnRydWUsImRyYWdnYWJsZSI6dHJ1ZSwiZHVwbGljYXRhYmxlIjp0cnVlLCJkZWxldGFibGUiOnRydWUsImhpZGVhYmxlIjp0cnVlLCJ0ZXh0IjoiPHAgc3R5bGU9XCJmb250LXNpemU6IDE0cHg7IGxpbmUtaGVpZ2h0OiAxNDAlOyB0ZXh0LWFsaWduOiBjZW50ZXI7XCI+PHNwYW4gc3R5bGU9XCJmb250LXNpemU6IDE0cHg7IGxpbmUtaGVpZ2h0OiAxOS42cHg7XCI+PHN0cm9uZz48c3BhbiBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxOS42cHg7XCI+RU5WSUFETyBBVFVNQVRJQ0FNRU5URSBQT1I8L3NwYW4+PC9zdHJvbmc+PC9zcGFuPjwvcD5cbjxwIHN0eWxlPVwiZm9udC1zaXplOiAxNHB4OyBsaW5lLWhlaWdodDogMTQwJTsgdGV4dC1hbGlnbjogY2VudGVyO1wiPjxzcGFuIHN0eWxlPVwiZm9udC1zaXplOiAxNHB4OyBsaW5lLWhlaWdodDogMTkuNnB4O1wiPlNlYmFzdGlhbiBCbGFuY288L3NwYW4+PC9wPlxuPHAgc3R5bGU9XCJmb250LXNpemU6IDE0cHg7IGxpbmUtaGVpZ2h0OiAxNDAlOyB0ZXh0LWFsaWduOiBjZW50ZXI7XCI+PHNwYW4gc3R5bGU9XCJmb250LXNpemU6IDE0cHg7IGxpbmUtaGVpZ2h0OiAxOS42cHg7XCI+Y29udGFjdGNlbnRlckBhdXRvbWFyY29sLmNvbTwvc3Bhbj48L3A+XG48cCBzdHlsZT1cImZvbnQtc2l6ZTogMTRweDsgbGluZS1oZWlnaHQ6IDE0MCU7IHRleHQtYWxpZ246IGNlbnRlcjtcIj48c3BhbiBzdHlsZT1cImZvbnQtc2l6ZTogMTRweDsgbGluZS1oZWlnaHQ6IDE5LjZweDtcIj4rNTcgMzE1IDcwMDY2MzM8L3NwYW4+PC9wPiJ9fV0sInZhbHVlcyI6eyJfbWV0YSI6eyJodG1sSUQiOiJ1X2NvbHVtbl82IiwiaHRtbENsYXNzTmFtZXMiOiJ1X2NvbHVtbiJ9LCJib3JkZXIiOnsiYm9yZGVyVG9wV2lkdGgiOiIwcHgiLCJib3JkZXJUb3BTdHlsZSI6InNvbGlkIiwiYm9yZGVyTGVmdFdpZHRoIjoiMHB4IiwiYm9yZGVyTGVmdFN0eWxlIjoic29saWQiLCJib3JkZXJSaWdodFdpZHRoIjoiMHB4IiwiYm9yZGVyUmlnaHRTdHlsZSI6InNvbGlkIiwiYm9yZGVyQm90dG9tV2lkdGgiOiIwcHgiLCJib3JkZXJCb3R0b21TdHlsZSI6InNvbGlkIn0sInBhZGRpbmciOiIwcHgiLCJiYWNrZ3JvdW5kQ29sb3IiOiIifX1dLCJ2YWx1ZXMiOnsiZGlzcGxheUNvbmRpdGlvbiI6bnVsbCwiY29sdW1ucyI6ZmFsc2UsImJhY2tncm91bmRDb2xvciI6IiIsImNvbHVtbnNCYWNrZ3JvdW5kQ29sb3IiOiIiLCJiYWNrZ3JvdW5kSW1hZ2UiOnsidXJsIjoiIiwiZnVsbFdpZHRoIjp0cnVlLCJyZXBlYXQiOiJuby1yZXBlYXQiLCJzaXplIjoiY3VzdG9tIiwicG9zaXRpb24iOiJ0b3AtY2VudGVyIiwiY3VzdG9tUG9zaXRpb24iOlsiNTAlIiwiMCUiXX0sInBhZGRpbmciOiIwcHgiLCJhbmNob3IiOiIiLCJoaWRlRGVza3RvcCI6ZmFsc2UsIl9tZXRhIjp7Imh0bWxJRCI6InVfcm93XzYiLCJodG1sQ2xhc3NOYW1lcyI6InVfcm93In0sInNlbGVjdGFibGUiOnRydWUsImRyYWdnYWJsZSI6dHJ1ZSwiZHVwbGljYXRhYmxlIjp0cnVlLCJkZWxldGFibGUiOnRydWUsImhpZGVhYmxlIjp0cnVlLCJoaWRlTW9iaWxlIjpmYWxzZSwibm9TdGFja01vYmlsZSI6ZmFsc2V9fV0sInZhbHVlcyI6eyJwb3B1cFBvc2l0aW9uIjoiY2VudGVyIiwicG9wdXBXaWR0aCI6IjYwMHB4IiwicG9wdXBIZWlnaHQiOiJhdXRvIiwiYm9yZGVyUmFkaXVzIjoiMTBweCIsImNvbnRlbnRBbGlnbiI6ImNlbnRlciIsImNvbnRlbnRWZXJ0aWNhbEFsaWduIjoiY2VudGVyIiwiY29udGVudFdpZHRoIjoiNjAwcHgiLCJmb250RmFtaWx5Ijp7ImxhYmVsIjoiT3BlbiBTYW5zIiwidmFsdWUiOiInT3BlbiBTYW5zJyxzYW5zLXNlcmlmIiwidXJsIjoiaHR0cHM6Ly9mb250cy5nb29nbGVhcGlzLmNvbS9jc3M/ZmFtaWx5PU9wZW4rU2Fuczo0MDAsNzAwIiwiZGVmYXVsdEZvbnQiOnRydWUsIndlaWdodHMiOm51bGx9LCJ0ZXh0Q29sb3IiOiIjMDAwMDAwIiwicG9wdXBCYWNrZ3JvdW5kQ29sb3IiOiIjRkZGRkZGIiwicG9wdXBCYWNrZ3JvdW5kSW1hZ2UiOnsidXJsIjoiIiwiZnVsbFdpZHRoIjp0cnVlLCJyZXBlYXQiOiJuby1yZXBlYXQiLCJzaXplIjoiY292ZXIiLCJwb3NpdGlvbiI6InRvcC1jZW50ZXIiLCJjdXN0b21Qb3NpdGlvbiI6WyI1MCUiLCIwJSJdfSwicG9wdXBPdmVybGF5X2JhY2tncm91bmRDb2xvciI6InJnYmEoMCwgMCwgMCwgMC4xKSIsInBvcHVwQ2xvc2VCdXR0b25fcG9zaXRpb24iOiJ0b3AtcmlnaHQiLCJwb3B1cENsb3NlQnV0dG9uX2JhY2tncm91bmRDb2xvciI6IiNEREREREQiLCJwb3B1cENsb3NlQnV0dG9uX2ljb25Db2xvciI6IiMwMDAwMDAiLCJwb3B1cENsb3NlQnV0dG9uX2JvcmRlclJhZGl1cyI6IjBweCIsInBvcHVwQ2xvc2VCdXR0b25fbWFyZ2luIjoiMHB4IiwicG9wdXBDbG9zZUJ1dHRvbl9hY3Rpb24iOnsibmFtZSI6ImNsb3NlX3BvcHVwIiwiYXR0cnMiOnsib25DbGljayI6ImRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy51LXBvcHVwLWNvbnRhaW5lcicpLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7In19LCJiYWNrZ3JvdW5kQ29sb3IiOiIjZjVmNGY0IiwiYmFja2dyb3VuZEltYWdlIjp7InVybCI6IiIsImZ1bGxXaWR0aCI6dHJ1ZSwicmVwZWF0Ijoibm8tcmVwZWF0Iiwic2l6ZSI6ImN1c3RvbSIsInBvc2l0aW9uIjoidG9wLWNlbnRlciIsImN1c3RvbVBvc2l0aW9uIjpbIjUwJSIsIjAlIl19LCJwcmVoZWFkZXJUZXh0IjoiIiwibGlua1N0eWxlIjp7ImJvZHkiOnRydWUsImxpbmtDb2xvciI6IiMzNTk4ZGIiLCJsaW5rSG92ZXJDb2xvciI6IiMwMDAwZWUiLCJsaW5rVW5kZXJsaW5lIjpmYWxzZSwibGlua0hvdmVyVW5kZXJsaW5lIjp0cnVlLCJpbmhlcml0IjpmYWxzZX0sIl9tZXRhIjp7Imh0bWxJRCI6InVfYm9keSIsImh0bWxDbGFzc05hbWVzIjoidV9ib2R5In19fSwic2NoZW1hVmVyc2lvbiI6MTJ9">
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

table, td { color: #000000; } </style>
  
  

<!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css"><!--<![endif]-->

</head>

<body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f5f4f4;color: #000000">
  <!--[if IE]><div class="ie-container"><![endif]-->
  <!--[if mso]><div class="mso-container"><![endif]-->
  <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f5f4f4;width:100%" cellpadding="0" cellspacing="0">
  <tbody>
  <tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #f5f4f4;"><![endif]-->
    

<div class="u-row-container" style="padding: 0px;background-color: #2c3565">
  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #2c3565;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
      
<!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
  <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
  <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
  
<table style="font-family:"Open Sans,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:35px;font-family:"Open Sans,sans-serif;" align="left">
        
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
  
<table style="font-family:"Open Sans,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:25px;font-family:"Open Sans,sans-serif;" align="left">
        
  <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="0%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 0px dotted #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
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



<div class="u-row-container" style="padding: 0px;background-color: transparent">
  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->
      
<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color: #ffffff;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
  <div style="background-color: #ffffff;height: 100%;width: 100% !important;">
  <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
  
<table style="font-family:"Open Sans,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:15px 55px 1px;font-family:"Open Sans,sans-serif;" align="left">
        
  <div style="line-height: 160%; text-align: center; word-wrap: break-word;">
    <p style="line-height: 160%; text-align: justify; margin: 0px;"><span style="color: #2e3995; line-height: 22.4px;"><strong><span style="font-size: 26px; line-height: 41.6px;">PQRS #{numero} RECIBIDO</span></strong></span></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

<table style="font-family:"Open Sans,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:"Open Sans,sans-serif;" align="left">
        
<table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tbody><tr>
    <td style="padding-right: 0px;padding-left: 0px;" align="center">
      
      <img align="center" border="0" src="https://share1.cloudhq-mkt3.net/71bb007806fbb6.gif" alt="" title="" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 600px;" width="600">
      
    </td>
  </tr>
</tbody></table>

      </td>
    </tr>
  </tbody>
</table>

<table style="font-family:"Open Sans,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:15px 55px 40px;font-family:"Open Sans,sans-serif;" align="left">
        
  <div style="line-height: 160%; text-align: center; word-wrap: break-word;">
    <p style="line-height: 160%; text-align: justify; margin: 0px;">Señor/a {nombre}, Su PQRS ha sido generado con éxito y pronto se te dará solución a tu solicitud, A partir del día siguiente a la fecha de radicación de tu PQR, el proveedor cuenta con 15 días hábiles para darte respuesta, este término podrá ampliarse hasta por 15 días hábiles más, cuando sea necesaria la práctica de pruebas o complementación de información, lo cual debe ser previamente informado por parte del operador.</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">&nbsp;</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">la información suministrada para este caso es la siguiente:</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">&nbsp;</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">Nombres:</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">Tipo de solicitud:</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">Lugar del evento:</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">Fecha del Evento:</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">Descripción:</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">&nbsp;</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">&nbsp;</p>
<p style="line-height: 160%; text-align: justify; margin: 0px;">&nbsp;</p>
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
  
<table style="font-family:"Open Sans,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px 40px;font-family:"Open Sans,sans-serif;" align="left">
        
  <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
    <p style="font-size: 14px; line-height: 140%; text-align: center; margin: 0px;"><span style="font-size: 14px; line-height: 19.6px;"><strong><span style="line-height: 19.6px;">ENVIADO ATUMATICAMENTE POR</span></strong></span></p>
<p style="font-size: 14px; line-height: 140%; text-align: center; margin: 0px;"><span style="font-size: 14px; line-height: 19.6px;">Sebastian Blanco</span></p>
<p style="font-size: 14px; line-height: 140%; text-align: center; margin: 0px;"><span style="font-size: 14px; line-height: 19.6px;">contactcenter@automarcol.com</span></p>
<p style="font-size: 14px; line-height: 140%; text-align: center; margin: 0px;"><span style="font-size: 14px; line-height: 19.6px;">+57 315 7006633</span></p>
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



</body></html>
   
   ';

   $cabeceras = 'MIME-Version: 1.0' . "\r\n" .
       'Content-type:text/html;charset=UTF-8' . "\r\n" .
       'Reply-To: '.$correo. "\r\n" .
       'CC: contactcenter@automarcol.com , isistemas@automarcol.com' . "\r\n" .
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
        title: 'Su peticion fue enviada con exito',
        text: 'Porfavor este atento al correo suministrado',
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