<?php
require '../includes/cn.php';

if (isset($_POST['rechazado']) or isset($_POST['atendido'])) {
    $id = $_POST['id'];
    if (isset($_POST['rechazado'])) {
        $accion = 'Rechazado';
    }else {
        $accion = 'Atendido';
    }
    $query = "UPDATE pqrs SET estado='$accion' WHERE id=$id";
    $result_task = mysqli_query($conn, $query);
}

if (isset($_POST['respuesta'])){
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $respuesta = $_POST['res'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $query = "UPDATE pqrs SET respuesta='$respuesta', usuario_respuesta='$usuario' WHERE id=$id";
    $result_task = mysqli_query($conn, $query);
    $para = 'isistemas@automarcol.com';
    $titulo = 'TICKET PQRS '.$id.' - AUTOMARCOL SAS';
    $mensaje = '<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><meta name="__cloudhq_email_draft_json" content="eyJjb3VudGVycyI6eyJ1X3JvdyI6MTgsInVfY29sdW1uIjoyNywidV9jb250ZW50X3RleHQiOjE2LCJ1X2NvbnRlbnRfaW1hZ2UiOjIxLCJ1X2NvbnRlbnRfYnV0dG9uIjoxLCJ1X2NvbnRlbnRfc29jaWFsIjoxLCJ1X2NvbnRlbnRfdmlkZW8iOjEsInVfY29udGVudF9kaXZpZGVyIjoxMCwidV9jb250ZW50X2N1c3RvbV9wb2xsIjoxLCJ1X2NvbnRlbnRfY3VzdG9tX2Jvb2tfbWUiOjEsInVfY29udGVudF90aW1lciI6MSwidV9jb250ZW50X21lbnUiOjEsInVfY29udGVudF90ZXh0X2RlcHJlY2F0ZWQiOjJ9LCJib2R5Ijp7ImlkIjoiRjBzdEdvbkZVTSIsInJvd3MiOlt7ImlkIjoicXE1RjdtZGRseCIsImNlbGxzIjpbMV0sImNvbHVtbnMiOlt7ImlkIjoiSlVpcnR2bXdmMSIsImNvbnRlbnRzIjpbeyJpZCI6Ii1CdWhWZDhMaVciLCJ0eXBlIjoiZGl2aWRlciIsInZhbHVlcyI6eyJ3aWR0aCI6IjAlIiwiYm9yZGVyIjp7ImJvcmRlclRvcFdpZHRoIjoiMXB4IiwiYm9yZGVyVG9wU3R5bGUiOiJzb2xpZCIsImJvcmRlclRvcENvbG9yIjoiI0JCQkJCQiJ9LCJ0ZXh0QWxpZ24iOiJjZW50ZXIiLCJjb250YWluZXJQYWRkaW5nIjoiMzVweCIsImFuY2hvciI6IiIsImhpZGVEZXNrdG9wIjpmYWxzZSwiZGlzcGxheUNvbmRpdGlvbiI6bnVsbCwiX21ldGEiOnsiaHRtbElEIjoidV9jb250ZW50X2RpdmlkZXJfNiIsImh0bWxDbGFzc05hbWVzIjoidV9jb250ZW50X2RpdmlkZXIifSwic2VsZWN0YWJsZSI6dHJ1ZSwiZHJhZ2dhYmxlIjp0cnVlLCJkdXBsaWNhdGFibGUiOnRydWUsImRlbGV0YWJsZSI6dHJ1ZSwiaGlkZWFibGUiOnRydWV9fV0sInZhbHVlcyI6eyJiYWNrZ3JvdW5kQ29sb3IiOiIiLCJwYWRkaW5nIjoiMHB4IiwiYm9yZGVyIjp7fSwiYm9yZGVyUmFkaXVzIjoiMHB4IiwiX21ldGEiOnsiaHRtbElEIjoidV9jb2x1bW5fMjQiLCJodG1sQ2xhc3NOYW1lcyI6InVfY29sdW1uIn19fV0sInZhbHVlcyI6eyJkaXNwbGF5Q29uZGl0aW9uIjpudWxsLCJjb2x1bW5zIjpmYWxzZSwiYmFja2dyb3VuZENvbG9yIjoiIzJjMzU2NSIsImNvbHVtbnNCYWNrZ3JvdW5kQ29sb3IiOiIiLCJiYWNrZ3JvdW5kSW1hZ2UiOnsidXJsIjoiIiwiZnVsbFdpZHRoIjp0cnVlLCJyZXBlYXQiOiJyZXBlYXQiLCJzaXplIjoiY3VzdG9tIiwicG9zaXRpb24iOiJ0b3AtbGVmdCIsImN1c3RvbVBvc2l0aW9uIjpbIjAlIiwiMCUiXX0sInBhZGRpbmciOiIwcHgiLCJhbmNob3IiOiIiLCJoaWRlRGVza3RvcCI6ZmFsc2UsIl9tZXRhIjp7Imh0bWxJRCI6InVfcm93XzE1IiwiaHRtbENsYXNzTmFtZXMiOiJ1X3JvdyJ9LCJzZWxlY3RhYmxlIjp0cnVlLCJkcmFnZ2FibGUiOnRydWUsImR1cGxpY2F0YWJsZSI6dHJ1ZSwiZGVsZXRhYmxlIjp0cnVlLCJoaWRlYWJsZSI6dHJ1ZX19LHsiaWQiOiJiNU5vNjJ6NlU3IiwiY2VsbHMiOlsxXSwiY29sdW1ucyI6W3siaWQiOiJvNDJwckxmQ20zIiwiY29udGVudHMiOlt7ImlkIjoiVmdEX0lOQTNOYiIsInR5cGUiOiJkaXZpZGVyIiwidmFsdWVzIjp7IndpZHRoIjoiMCUiLCJib3JkZXIiOnsiYm9yZGVyVG9wV2lkdGgiOiIwcHgiLCJib3JkZXJUb3BTdHlsZSI6ImRvdHRlZCIsImJvcmRlclRvcENvbG9yIjoiI0JCQkJCQiJ9LCJ0ZXh0QWxpZ24iOiJjZW50ZXIiLCJjb250YWluZXJQYWRkaW5nIjoiMjVweCIsImFuY2hvciI6IiIsImhpZGVEZXNrdG9wIjpmYWxzZSwiZGlzcGxheUNvbmRpdGlvbiI6bnVsbCwiX21ldGEiOnsiaHRtbElEIjoidV9jb250ZW50X2RpdmlkZXJfNyIsImh0bWxDbGFzc05hbWVzIjoidV9jb250ZW50X2RpdmlkZXIifSwic2VsZWN0YWJsZSI6dHJ1ZSwiZHJhZ2dhYmxlIjp0cnVlLCJkdXBsaWNhdGFibGUiOnRydWUsImRlbGV0YWJsZSI6dHJ1ZSwiaGlkZWFibGUiOnRydWV9fV0sInZhbHVlcyI6eyJiYWNrZ3JvdW5kQ29sb3IiOiIjZmZmZmZmIiwicGFkZGluZyI6IjBweCIsImJvcmRlciI6e30sImJvcmRlclJhZGl1cyI6IjBweCIsIl9tZXRhIjp7Imh0bWxJRCI6InVfY29sdW1uXzI2IiwiaHRtbENsYXNzTmFtZXMiOiJ1X2NvbHVtbiJ9fX1dLCJ2YWx1ZXMiOnsiZGlzcGxheUNvbmRpdGlvbiI6bnVsbCwiY29sdW1ucyI6ZmFsc2UsImJhY2tncm91bmRDb2xvciI6IiMyYzM1NjUiLCJjb2x1bW5zQmFja2dyb3VuZENvbG9yIjoiIiwiYmFja2dyb3VuZEltYWdlIjp7InVybCI6IiIsImZ1bGxXaWR0aCI6dHJ1ZSwicmVwZWF0IjoicmVwZWF0Iiwic2l6ZSI6ImN1c3RvbSIsInBvc2l0aW9uIjoidG9wLWxlZnQiLCJjdXN0b21Qb3NpdGlvbiI6WyIwJSIsIjAlIl19LCJwYWRkaW5nIjoiMHB4IiwiYW5jaG9yIjoiIiwiaGlkZURlc2t0b3AiOmZhbHNlLCJfbWV0YSI6eyJodG1sSUQiOiJ1X3Jvd18xNyIsImh0bWxDbGFzc05hbWVzIjoidV9yb3cifSwic2VsZWN0YWJsZSI6dHJ1ZSwiZHJhZ2dhYmxlIjp0cnVlLCJkdXBsaWNhdGFibGUiOnRydWUsImRlbGV0YWJsZSI6dHJ1ZSwiaGlkZWFibGUiOnRydWV9fSx7ImlkIjoiYkZyWkIzd3BfeSIsImNlbGxzIjpbMV0sImNvbHVtbnMiOlt7ImlkIjoiZ2tVN3ZpanVQMiIsImNvbnRlbnRzIjpbeyJpZCI6IlZpZ2hqRE1hNVYiLCJ0eXBlIjoidGV4dF9kZXByZWNhdGVkIiwidmFsdWVzIjp7ImNvbnRhaW5lclBhZGRpbmciOiIxNXB4IDU1cHggMXB4IiwiYW5jaG9yIjoiIiwidGV4dEFsaWduIjoiY2VudGVyIiwibGluZUhlaWdodCI6IjE2MCUiLCJsaW5rU3R5bGUiOnsiaW5oZXJpdCI6dHJ1ZSwibGlua0NvbG9yIjoiIzAwMDBlZSIsImxpbmtIb3ZlckNvbG9yIjoiIzAwMDBlZSIsImxpbmtVbmRlcmxpbmUiOnRydWUsImxpbmtIb3ZlclVuZGVybGluZSI6dHJ1ZX0sImhpZGVEZXNrdG9wIjpmYWxzZSwiZGlzcGxheUNvbmRpdGlvbiI6bnVsbCwiX21ldGEiOnsiaHRtbElEIjoidV9jb250ZW50X3RleHRfMTUiLCJodG1sQ2xhc3NOYW1lcyI6InVfY29udGVudF90ZXh0In0sInNlbGVjdGFibGUiOnRydWUsImRyYWdnYWJsZSI6dHJ1ZSwiZHVwbGljYXRhYmxlIjp0cnVlLCJkZWxldGFibGUiOnRydWUsImhpZGVhYmxlIjp0cnVlLCJoaWRlTW9iaWxlIjpmYWxzZSwidGV4dCI6IjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGNlbnRlcjtcIj48c3BhbiBzdHlsZT1cImNvbG9yOiAjMmUzOTk1OyBsaW5lLWhlaWdodDogNDQuOHB4OyBmb250LXNpemU6IDI4cHg7XCI+PHN0cm9uZz48c3BhbiBzdHlsZT1cImxpbmUtaGVpZ2h0OiA0NC44cHg7XCI+UFFSUyAjMyBSRUNJQklETzwvc3Bhbj48L3N0cm9uZz48L3NwYW4+PC9wPiJ9fSx7ImlkIjoiaUJBT1BNNDJuaCIsInR5cGUiOiJpbWFnZSIsInZhbHVlcyI6eyJjb250YWluZXJQYWRkaW5nIjoiMHB4IiwiYW5jaG9yIjoiIiwic3JjIjp7InVybCI6Imh0dHBzOi8vc2hhcmUxLmNsb3VkaHEtbWt0My5uZXQvNzFiYjAwNzgwNmZiYjYuZ2lmIiwid2lkdGgiOjExNTIsImhlaWdodCI6NjQ4fSwidGV4dEFsaWduIjoiY2VudGVyIiwiYWx0VGV4dCI6IiIsImFjdGlvbiI6eyJuYW1lIjoid2ViIiwidmFsdWVzIjp7ImhyZWYiOiIiLCJ0YXJnZXQiOiJfYmxhbmsifX0sImhpZGVEZXNrdG9wIjpmYWxzZSwiZGlzcGxheUNvbmRpdGlvbiI6bnVsbCwiX21ldGEiOnsiaHRtbElEIjoidV9jb250ZW50X2ltYWdlXzIxIiwiaHRtbENsYXNzTmFtZXMiOiJ1X2NvbnRlbnRfaW1hZ2UifSwic2VsZWN0YWJsZSI6dHJ1ZSwiZHJhZ2dhYmxlIjp0cnVlLCJkdXBsaWNhdGFibGUiOnRydWUsImRlbGV0YWJsZSI6dHJ1ZSwiaGlkZWFibGUiOnRydWV9fSx7ImlkIjoiYnk5X0I0SHViZiIsInR5cGUiOiJ0ZXh0X2RlcHJlY2F0ZWQiLCJ2YWx1ZXMiOnsiY29udGFpbmVyUGFkZGluZyI6IjE1cHggNTVweCA0MHB4IiwiYW5jaG9yIjoiIiwidGV4dEFsaWduIjoiY2VudGVyIiwibGluZUhlaWdodCI6IjE2MCUiLCJsaW5rU3R5bGUiOnsiaW5oZXJpdCI6dHJ1ZSwibGlua0NvbG9yIjoiIzAwMDBlZSIsImxpbmtIb3ZlckNvbG9yIjoiIzAwMDBlZSIsImxpbmtVbmRlcmxpbmUiOnRydWUsImxpbmtIb3ZlclVuZGVybGluZSI6dHJ1ZX0sImhpZGVEZXNrdG9wIjpmYWxzZSwiZGlzcGxheUNvbmRpdGlvbiI6bnVsbCwiX21ldGEiOnsiaHRtbElEIjoidV9jb250ZW50X3RleHRfZGVwcmVjYXRlZF8yIiwiaHRtbENsYXNzTmFtZXMiOiJ1X2NvbnRlbnRfdGV4dCJ9LCJzZWxlY3RhYmxlIjp0cnVlLCJkcmFnZ2FibGUiOnRydWUsImR1cGxpY2F0YWJsZSI6dHJ1ZSwiZGVsZXRhYmxlIjp0cnVlLCJoaWRlYWJsZSI6dHJ1ZSwiaGlkZU1vYmlsZSI6ZmFsc2UsInRleHQiOiI8cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPlNlw7Fvci9hIHtub21icmV9LCBTdSBQUVJTIGhhIHNpZG8gZ2VuZXJhZG8gY29uIMOpeGl0byB5IHByb250byBzZSB0ZSBkYXLDoSBzb2x1Y2nDs24gYSB0dSBzb2xpY2l0dWQsIEEgcGFydGlyIGRlbCBkw61hIHNpZ3VpZW50ZSBhIGxhIGZlY2hhIGRlIHJhZGljYWNpw7NuIGRlIHR1IFBRUiwgZWwgcHJvdmVlZG9yIGN1ZW50YSBjb24gMTUgZMOtYXMgaMOhYmlsZXMgcGFyYSBkYXJ0ZSByZXNwdWVzdGEsIGVzdGUgdMOpcm1pbm8gcG9kcsOhIGFtcGxpYXJzZSBoYXN0YSBwb3IgMTUgZMOtYXMgaMOhYmlsZXMgbcOhcywgY3VhbmRvIHNlYSBuZWNlc2FyaWEgbGEgcHLDoWN0aWNhIGRlIHBydWViYXMgbyBjb21wbGVtZW50YWNpw7NuIGRlIGluZm9ybWFjacOzbiwgbG8gY3VhbCBkZWJlIHNlciBwcmV2aWFtZW50ZSBpbmZvcm1hZG8gcG9yIHBhcnRlIGRlbCBvcGVyYWRvci48L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPsKgPC9wPlxuPHAgc3R5bGU9XCJsaW5lLWhlaWdodDogMTYwJTsgdGV4dC1hbGlnbjoganVzdGlmeTtcIj5sYSBpbmZvcm1hY2nDs24gc3VtaW5pc3RyYWRhIHBhcmEgZXN0ZSBjYXNvIGVzIGxhIHNpZ3VpZW50ZTo8L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPsKgPC9wPlxuPHAgc3R5bGU9XCJsaW5lLWhlaWdodDogMTYwJTsgdGV4dC1hbGlnbjoganVzdGlmeTtcIj5Ob21icmVzOiB3cWV3cWV3cWV3cWU8L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPlRpcG8gZGUgc29saWNpdHVkOiB3cWV3cWV3cWV3cTwvcD5cbjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+THVnYXIgZGVsIGV2ZW50bzogd3Fld3Fld3Fld3FlPC9wPlxuPHAgc3R5bGU9XCJsaW5lLWhlaWdodDogMTYwJTsgdGV4dC1hbGlnbjoganVzdGlmeTtcIj5GZWNoYSBkZWwgRXZlbnRvOiB3cWV3cWV3cWV3cWU8L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPkRlc2NyaXBjacOzbjo8L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPndxZXdxZXdxZXF3ZXdxd2Vxd3Fld3Fld3Fld3FlcXdxcXFxcXFxcXF3cXF3d3d3d3d3cXdxd3F3cXdxd3FxcXFxcXFxcXFxcXFxcXFxPC9wPlxuPHAgc3R5bGU9XCJsaW5lLWhlaWdodDogMTYwJTsgdGV4dC1hbGlnbjoganVzdGlmeTtcIj7CoDwvcD5cbjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE2MCU7IHRleHQtYWxpZ246IGp1c3RpZnk7XCI+wqA8L3A+XG48cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNjAlOyB0ZXh0LWFsaWduOiBqdXN0aWZ5O1wiPkN1YWxxdWllciBkdWRhLCBxdWVqYSBvIGlucXVpZXR1ZCBjb24gbXVjaG8gZ3VzdG8gdGUgcG9kZW1vcyBzb2x1Y2lvbmFyIHBvciBudWVzdHJhIGxpbmVhIGRlIGF0ZW5jacOzbiBhbCBjbGllbnRlIDxhIGhyZWY9XCJtYWlsdG86Y29udGFjdGNlbnRlckBhdXRvbWFyY29sLmNvbVwiPmNvbnRhY3RjZW50ZXJAYXV0b21hcmNvbC5jb208L2E+IGNvbiBudW1lcm8gZGlyZWN0byAzMTU3MDA2NjMzIG8gZW4gc3UgZGVmZWN0byBhIGdlcmVuY2lhIHBvciBtZWRpbyBkZcKgIDxhIHJlbD1cIm5vb3BlbmVyXCIgaHJlZj1cIm1haWx0bzppc2lzdGVtYXNAYXV0b21hcmNvbC5jb21cIiB0YXJnZXQ9XCJfYmxhbmtcIj5pc2lzdGVtYXNAYXV0b21hcmNvbC5jb208L2E+IGNvbiBudW1lcm8gZGlyZWN0byAzMjIyODYzOTM4PC9wPiJ9fV0sInZhbHVlcyI6eyJfbWV0YSI6eyJodG1sSUQiOiJ1X2NvbHVtbl80IiwiaHRtbENsYXNzTmFtZXMiOiJ1X2NvbHVtbiJ9LCJib3JkZXIiOnsiYm9yZGVyVG9wV2lkdGgiOiIwcHgiLCJib3JkZXJUb3BTdHlsZSI6InNvbGlkIiwiYm9yZGVyTGVmdFdpZHRoIjoiMHB4IiwiYm9yZGVyTGVmdFN0eWxlIjoic29saWQiLCJib3JkZXJSaWdodFdpZHRoIjoiMHB4IiwiYm9yZGVyUmlnaHRTdHlsZSI6InNvbGlkIiwiYm9yZGVyQm90dG9tV2lkdGgiOiIwcHgiLCJib3JkZXJCb3R0b21TdHlsZSI6InNvbGlkIn0sInBhZGRpbmciOiIwcHgiLCJiYWNrZ3JvdW5kQ29sb3IiOiIjZmZmZmZmIn19XSwidmFsdWVzIjp7ImRpc3BsYXlDb25kaXRpb24iOm51bGwsImNvbHVtbnMiOmZhbHNlLCJiYWNrZ3JvdW5kQ29sb3IiOiIiLCJjb2x1bW5zQmFja2dyb3VuZENvbG9yIjoiI2ZmZmZmZiIsImJhY2tncm91bmRJbWFnZSI6eyJ1cmwiOiIiLCJmdWxsV2lkdGgiOnRydWUsInJlcGVhdCI6Im5vLXJlcGVhdCIsInNpemUiOiJjdXN0b20iLCJwb3NpdGlvbiI6InRvcC1jZW50ZXIiLCJjdXN0b21Qb3NpdGlvbiI6WyI1MCUiLCIwJSJdfSwicGFkZGluZyI6IjBweCIsImFuY2hvciI6IiIsImhpZGVEZXNrdG9wIjpmYWxzZSwiX21ldGEiOnsiaHRtbElEIjoidV9yb3dfNCIsImh0bWxDbGFzc05hbWVzIjoidV9yb3cifSwic2VsZWN0YWJsZSI6dHJ1ZSwiZHJhZ2dhYmxlIjp0cnVlLCJkdXBsaWNhdGFibGUiOnRydWUsImRlbGV0YWJsZSI6dHJ1ZSwiaGlkZWFibGUiOnRydWUsImhpZGVNb2JpbGUiOmZhbHNlLCJub1N0YWNrTW9iaWxlIjpmYWxzZX19LHsiaWQiOiJibGZrUGRqalBsIiwiY2VsbHMiOlsxXSwiY29sdW1ucyI6W3siaWQiOiJETEZwcnR6V0FUIiwiY29udGVudHMiOlt7ImlkIjoiYnlHd0dCbFhuaSIsInR5cGUiOiJ0ZXh0X2RlcHJlY2F0ZWQiLCJ2YWx1ZXMiOnsiY29udGFpbmVyUGFkZGluZyI6IjEwcHggNDBweCIsImFuY2hvciI6IiIsInRleHRBbGlnbiI6ImxlZnQiLCJsaW5lSGVpZ2h0IjoiMTQwJSIsImxpbmtTdHlsZSI6eyJpbmhlcml0Ijp0cnVlLCJsaW5rQ29sb3IiOiIjMDAwMGVlIiwibGlua0hvdmVyQ29sb3IiOiIjMDAwMGVlIiwibGlua1VuZGVybGluZSI6dHJ1ZSwibGlua0hvdmVyVW5kZXJsaW5lIjp0cnVlfSwiaGlkZURlc2t0b3AiOmZhbHNlLCJkaXNwbGF5Q29uZGl0aW9uIjpudWxsLCJfbWV0YSI6eyJodG1sSUQiOiJ1X2NvbnRlbnRfdGV4dF8xMSIsImh0bWxDbGFzc05hbWVzIjoidV9jb250ZW50X3RleHQifSwic2VsZWN0YWJsZSI6dHJ1ZSwiZHJhZ2dhYmxlIjp0cnVlLCJkdXBsaWNhdGFibGUiOnRydWUsImRlbGV0YWJsZSI6dHJ1ZSwiaGlkZWFibGUiOnRydWUsInRleHQiOiI8cCBzdHlsZT1cImxpbmUtaGVpZ2h0OiAxNDAlOyB0ZXh0LWFsaWduOiBjZW50ZXI7XCI+PHNwYW4gc3R5bGU9XCJmb250LXNpemU6IDEycHg7IGxpbmUtaGVpZ2h0OiAxNi44cHg7XCI+PC9zcGFuPjxzcGFuIHN0eWxlPVwiZm9udC1zaXplOiAxMnB4OyBsaW5lLWhlaWdodDogMTYuOHB4O1wiPk1FTlNBSkUgPC9zcGFuPjxzcGFuIHN0eWxlPVwiZm9udC1zaXplOiAxMnB4OyBsaW5lLWhlaWdodDogMTYuOHB4O1wiPkVOVklBRE8gQVVUT01BVElDQU1FTlRFPC9zcGFuPjwvcD5cbjxwIHN0eWxlPVwibGluZS1oZWlnaHQ6IDE0MCU7IHRleHQtYWxpZ246IGNlbnRlcjtcIj48c3BhbiBzdHlsZT1cImZvbnQtc2l6ZTogMTJweDsgbGluZS1oZWlnaHQ6IDE2LjhweDtcIj5QT1IgRUwgU0lTVEVNQSBERSBHRVNUSU9OIFBRUlM8L3NwYW4+PC9wPlxuPHAgc3R5bGU9XCJsaW5lLWhlaWdodDogMTQwJTsgdGV4dC1hbGlnbjogY2VudGVyO1wiPjxzcGFuIHN0eWxlPVwiZm9udC1zaXplOiAxMnB4OyBsaW5lLWhlaWdodDogMTYuOHB4O1wiPmh0dHBzOi8vYXV0b21hcmNvbC5jb20vcHFyczwvc3Bhbj48L3A+In19XSwidmFsdWVzIjp7Il9tZXRhIjp7Imh0bWxJRCI6InVfY29sdW1uXzYiLCJodG1sQ2xhc3NOYW1lcyI6InVfY29sdW1uIn0sImJvcmRlciI6eyJib3JkZXJUb3BXaWR0aCI6IjBweCIsImJvcmRlclRvcFN0eWxlIjoic29saWQiLCJib3JkZXJMZWZ0V2lkdGgiOiIwcHgiLCJib3JkZXJMZWZ0U3R5bGUiOiJzb2xpZCIsImJvcmRlclJpZ2h0V2lkdGgiOiIwcHgiLCJib3JkZXJSaWdodFN0eWxlIjoic29saWQiLCJib3JkZXJCb3R0b21XaWR0aCI6IjBweCIsImJvcmRlckJvdHRvbVN0eWxlIjoic29saWQifSwicGFkZGluZyI6IjBweCIsImJhY2tncm91bmRDb2xvciI6IiJ9fV0sInZhbHVlcyI6eyJkaXNwbGF5Q29uZGl0aW9uIjpudWxsLCJjb2x1bW5zIjpmYWxzZSwiYmFja2dyb3VuZENvbG9yIjoiIiwiY29sdW1uc0JhY2tncm91bmRDb2xvciI6IiIsImJhY2tncm91bmRJbWFnZSI6eyJ1cmwiOiIiLCJmdWxsV2lkdGgiOnRydWUsInJlcGVhdCI6Im5vLXJlcGVhdCIsInNpemUiOiJjdXN0b20iLCJwb3NpdGlvbiI6InRvcC1jZW50ZXIiLCJjdXN0b21Qb3NpdGlvbiI6WyI1MCUiLCIwJSJdfSwicGFkZGluZyI6IjBweCIsImFuY2hvciI6IiIsImhpZGVEZXNrdG9wIjpmYWxzZSwiX21ldGEiOnsiaHRtbElEIjoidV9yb3dfNiIsImh0bWxDbGFzc05hbWVzIjoidV9yb3cifSwic2VsZWN0YWJsZSI6dHJ1ZSwiZHJhZ2dhYmxlIjp0cnVlLCJkdXBsaWNhdGFibGUiOnRydWUsImRlbGV0YWJsZSI6dHJ1ZSwiaGlkZWFibGUiOnRydWUsImhpZGVNb2JpbGUiOmZhbHNlLCJub1N0YWNrTW9iaWxlIjpmYWxzZX19XSwidmFsdWVzIjp7InBvcHVwUG9zaXRpb24iOiJjZW50ZXIiLCJwb3B1cFdpZHRoIjoiNjAwcHgiLCJwb3B1cEhlaWdodCI6ImF1dG8iLCJib3JkZXJSYWRpdXMiOiIxMHB4IiwiY29udGVudEFsaWduIjoiY2VudGVyIiwiY29udGVudFZlcnRpY2FsQWxpZ24iOiJjZW50ZXIiLCJjb250ZW50V2lkdGgiOjY1MCwiZm9udEZhbWlseSI6eyJsYWJlbCI6IlZlcmRhbmEiLCJ2YWx1ZSI6InZlcmRhbmEsZ2VuZXZhIiwidXJsIjoiIiwiZGVmYXVsdEZvbnQiOnRydWUsIndlaWdodHMiOm51bGx9LCJ0ZXh0Q29sb3IiOiIjMDAwMDAwIiwicG9wdXBCYWNrZ3JvdW5kQ29sb3IiOiIjRkZGRkZGIiwicG9wdXBCYWNrZ3JvdW5kSW1hZ2UiOnsidXJsIjoiIiwiZnVsbFdpZHRoIjp0cnVlLCJyZXBlYXQiOiJuby1yZXBlYXQiLCJzaXplIjoiY292ZXIiLCJwb3NpdGlvbiI6InRvcC1jZW50ZXIiLCJjdXN0b21Qb3NpdGlvbiI6WyI1MCUiLCIwJSJdfSwicG9wdXBPdmVybGF5X2JhY2tncm91bmRDb2xvciI6InJnYmEoMCwgMCwgMCwgMC4xKSIsInBvcHVwQ2xvc2VCdXR0b25fcG9zaXRpb24iOiJ0b3AtcmlnaHQiLCJwb3B1cENsb3NlQnV0dG9uX2JhY2tncm91bmRDb2xvciI6IiNEREREREQiLCJwb3B1cENsb3NlQnV0dG9uX2ljb25Db2xvciI6IiMwMDAwMDAiLCJwb3B1cENsb3NlQnV0dG9uX2JvcmRlclJhZGl1cyI6IjBweCIsInBvcHVwQ2xvc2VCdXR0b25fbWFyZ2luIjoiMHB4IiwicG9wdXBDbG9zZUJ1dHRvbl9hY3Rpb24iOnsibmFtZSI6ImNsb3NlX3BvcHVwIiwiYXR0cnMiOnsib25DbGljayI6ImRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy51LXBvcHVwLWNvbnRhaW5lcicpLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7In19LCJiYWNrZ3JvdW5kQ29sb3IiOiIjZjVmNGY0IiwiYmFja2dyb3VuZEltYWdlIjp7InVybCI6IiIsImZ1bGxXaWR0aCI6dHJ1ZSwicmVwZWF0Ijoibm8tcmVwZWF0Iiwic2l6ZSI6ImN1c3RvbSIsInBvc2l0aW9uIjoidG9wLWNlbnRlciIsImN1c3RvbVBvc2l0aW9uIjpbIjUwJSIsIjAlIl19LCJwcmVoZWFkZXJUZXh0IjoiIiwibGlua1N0eWxlIjp7ImJvZHkiOnRydWUsImxpbmtDb2xvciI6IiMzNTk4ZGIiLCJsaW5rSG92ZXJDb2xvciI6IiMwMDAwZWUiLCJsaW5rVW5kZXJsaW5lIjpmYWxzZSwibGlua0hvdmVyVW5kZXJsaW5lIjp0cnVlLCJpbmhlcml0IjpmYWxzZX0sIl9tZXRhIjp7Imh0bWxJRCI6InVfYm9keSIsImh0bWxDbGFzc05hbWVzIjoidV9ib2R5In19fSwic2NoZW1hVmVyc2lvbiI6MTJ9">
    <!--[if gte mso 9]>
    <xml>
    <o:OfficeDocumentSettings>e
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
    @media only screen and (min-width: 670px) {
    .u-row {
    width: 650px !important;
    }
    .u-row .u-col {
    vertical-align: top;
    }

    .u-row .u-col-100 {
    width: 650px !important;
    }

    }

    @media (max-width: 670px) {
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

    <body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f5f4f4;color: #000000">
    <!--[if IE]><div class="ie-container"><![endif]-->
    <!--[if mso]><div class="mso-container"><![endif]-->
    <table id="u_body" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f5f4f4;width:100%" cellpadding="0" cellspacing="0">
    <tbody>
    <tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #f5f4f4;"><![endif]-->
    

    <div class="u-row-container" style="padding: 0px;background-color: #2c3565">
    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 650px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #2c3565;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:650px;"><tr style="background-color: transparent;"><![endif]-->
    
    <!--[if (mso)|(IE)]><td align="center" width="650" style="width: 650px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style="max-width: 320px;min-width: 650px;display: table-cell;vertical-align: top;">
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
    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 650px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #2c3565;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:650px;"><tr style="background-color: transparent;"><![endif]-->
    
    <!--[if (mso)|(IE)]><td align="center" width="650" style="background-color: #ffffff;width: 650px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style="max-width: 320px;min-width: 650px;display: table-cell;vertical-align: top;">
    <div style="background-color: #ffffff;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->

    <table style="font-family:verdana,geneva;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:25px;font-family:verdana,geneva;" align="left">
        
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
    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 650px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:650px;"><tr style="background-color: #ffffff;"><![endif]-->
    
    <!--[if (mso)|(IE)]><td align="center" width="650" style="background-color: #ffffff;width: 650px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style="max-width: 320px;min-width: 650px;display: table-cell;vertical-align: top;">
    <div style="background-color: #ffffff;height: 100%;width: 100% !important;">
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->

    <table style="font-family:verdana,geneva;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:15px 55px 1px;font-family:verdana,geneva;" align="left">
        
    <div style="line-height: 160%; text-align: center; word-wrap: break-word;">
    <p style="line-height: 160%; text-align: center; margin: 0px;"><span style="color: #2e3995; line-height: 44.8px; font-size: 28px;"><strong><span style="line-height: 44.8px;">PQRS #'.$id.' RECIBIDO</span></strong></span></p>
    </div>

    </td>
    </tr>
    </tbody>
    </table>

    <table style="font-family:verdana,geneva;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:verdana,geneva;" align="left">
        
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
    <tbody><tr>
    <td style="padding-right: 0px;padding-left: 0px;" align="center">
    
    <img align="center" border="0" src="https://share1.cloudhq-mkt3.net/4c710dc42debcf.gif" alt="" title="" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 650px;" width="650">
    
    </td>
    </tr>
    </tbody></table>

    </td>
    </tr>
    </tbody>
    </table>

    <table style="font-family:verdana,geneva;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:15px 55px 40px;font-family:verdana,geneva;" align="left">
        
    <div style="line-height: 160%; text-align: center; word-wrap: break-word;">
    <p style="line-height: 160%; text-align: justify; margin: 0px;">Señor/a '.$nombre.', Su PQRS ha sido Analisado con éxito y por parte de nuestro equipo de AUTOMARCOL SAS te queremos dar la siguiente respuesta.</p>
    <p style="line-height: 160%; text-align: justify; margin: 0px;">'.$respuesta.'</p>
    <p style="line-height: 160%; text-align: justify; margin: 0px;">&nbsp;</p>
    <p style="line-height: 160%; text-align: justify; margin: 0px;">&nbsp;</p>
    <p style="line-height: 160%; text-align: justify; margin: 0px;">Cualquier duda, queja o inquietud con mucho gusto te podemos solucionar por nuestra linea de atención al cliente <a href="mailto:contactcenter@automarcol.com">contactcenter@automarcol.com</a> con numero directo 3157006633 o en su defecto a gerencia por medio de&nbsp; <a rel="noopener" href="mailto:isistemas@automarcol.com" target="_blank">isistemas@automarcol.com</a> con numero directo 3222863938</p>
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
    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 650px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:650px;"><tr style="background-color: transparent;"><![endif]-->
    
    <!--[if (mso)|(IE)]><td align="center" width="650" style="width: 650px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style="max-width: 320px;min-width: 650px;display: table-cell;vertical-align: top;">
    <div style="height: 100%;width: 100% !important;">
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->

    <table style="font-family:verdana,geneva;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px 40px;font-family:verdana,geneva;" align="left">
        
    <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
    <p style="line-height: 140%; text-align: center; margin: 0px;"><span style="font-size: 12px; line-height: 16.8px;"></span><span style="font-size: 12px; line-height: 16.8px;">MENSAJE </span><span style="font-size: 12px; line-height: 16.8px;">ENVIADO AUTOMATICAMENTE</span></p>
    <p style="line-height: 140%; text-align: center; margin: 0px;"><span style="font-size: 12px; line-height: 16.8px;">POR EL SISTEMA DE GESTION PQRS</span></p>
    <p style="line-height: 140%; text-align: center; margin: 0px;"><span style="font-size: 12px; line-height: 16.8px;">https://automarcol.com/pqrs</span></p>
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
        'CC: isistemas@automarcol.com , contactcenter@automarcol.com ' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $titulo, $mensaje, $cabeceras);

    }

header("location: ../pqrs")


?>