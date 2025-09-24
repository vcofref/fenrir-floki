<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8">
    <meta http-equiv="X-UA-Compatible">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <style type="text/css">
        @media(max-width:767px) {
            .d-block {
                width: 100% !important;
                text-align: center !important;
                display: inline-block !important;
                line-height: 170% !important;
            }

            .w-100 {
                width: 100% !important;
            }

            .w-75 {
                width: 75% !important;
            }

            .w-50 {
                width: 50% !important;
            }

            .w-33 {
                width: 33% !important;
            }

            .w-25 {
                width: 25% !important;
            }

            .w-15 {
                width: 15% !important;
            }

            .text-center {
                text-align: center !important;
            }

            .text-left {
                text-align: left !important;
            }

            .text-right {
                text-align: right !important;
            }

            .text-justify {
                text-align: justify !important;
            }

            .f-23 {
                font-size: 23px !important;
                line-height: 27px !important;
            }

            .pb-15 {
                padding-bottom: 15px !important;
            }

            .d-none {
                display: none;
            }
        }
    </style>
</head>

<body style="padding:0; margin:0;">
    <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#f6f6f6">
        <tbody>
            <tr>
                <td>
                    <table class="contenedor-mail" border="0" align="center" cellpadding="0" cellspacing="0"
                        width="800" bgcolor="#ffffff"
                        style="margin: 0 auto; font-family: Poppins, sans-serif; color: hsl(0, 0%, 47%);">
                        <tbody>
                            <tr
                                style="background-image: url('https://redplazalegal.cl/img/mail/Header_informativo-99.jpg'); background-position: left; background-size: cover;">
                                <td style="width: 100%; height: 107px;">
                                    <table style="border-spacing: 0px; width: 100%; padding: 0 40px;">
                                        <tbody>
                                            <tr>
                                                <td style="width: 70%;"></td>
                                                <td
                                                    style="width: 30%; font-size: 12px; line-height: 1; color: #fff; text-align: right; font-weight: 400; font-family: Poppins, sans-serif; white-space: nowrap;">
                                                    <p>Santiago, {{ $arrDatos['fecha'] }}</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="contenedor-bloque" border="0" align="center" cellpadding="0"
                                        cellspacing="0" width="80%" style="text-align: center;">
                                        <tbody>
                                            <tr>
                                                <td class="parrafo f-23"
                                                    style="font-size: 23px; line-height: 33px; padding-top: 10px; color: #303030; text-align: center; font-weight: 300; font-family: Poppins, sans-serif;">
                                                    Estimado cliente: <b><span
                                                            style="color: #de9b57;">{{ $arrDatos['nombre'] }}</span></b></td>
                                            </tr>
                                            <tr>
                                                <td height="0"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                        style="color: #546e7a; font-weight: 200; font-size: 14px; font-family: Poppins, sans-serif;"
                                        width="85%">
                                        <tbody>
                                            <tr>
                                                <td colspan="4" height="10"></td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="4">
                                                    <p style="height: 27px; width: 1px; background-color: #de9b57;"></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="contenedor-bloque" border="0" align="center" cellpadding="0"
                                        cellspacing="0" width="60%" style="text-align: center;">
                                        <tbody>
                                            <tr>
                                                <td height="10"></td>
                                            </tr>
                                            <tr>
                                                <td class="parrafo f-23"
                                                    style="font-size: 16px !important; line-height: 24px !important; font-weight: 400; text-align: justify; letter-spacing: -0.03px;">
                                                    <p><span style="letter-spacing: -0.03px; color: #787878;">Tienes una deuda en tu</span><b
                                                            style="letter-spacing: -0.03px; color: #787878;"> tarjeta de crédito banco Ripley nº,</b><span
                                                            style="letter-spacing: -0.03px; color: #787878;"> </span><b
                                                            style="color: #de9b57; font-weight: bold;">{{ $arrDatos['contrato'] }}</b><span
                                                            style="letter-spacing: -0.03px; color: #787878;"> por una deuda total de </span><b
                                                            style="color: #de9b57; font-weight: bold;">${{ $arrDatos['saldo_general'] }},</b><span
                                                            style="letter-spacing: -0.03px; color: #787878;"> la cual se encuentra pendiente desde el </span><b
                                                            style="color: #de9b57; font-weight: bold;">{{ $arrDatos['fecha_vencimiento'] }},</b><span
                                                            style="letter-spacing: -0.03px; color: #787878;">con </span><b
                                                            style="text-decoration: none; color: #de9b57; font-weight: bold;">{{ $arrDatos['dias_mora'] }}</b><span
                                                            style="letter-spacing: -0.03px; color: #787878;"> días de atraso, generando un recargo de interés por mora y gastos de cobranza.</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="parrafo f-23"
                                                    style="font-size: 16px !important; line-height: 24px !important; font-weight: 400; text-align: justify; letter-spacing: -0.03px; padding-top: 10px;">
                                                    Tenemos un descuento especial para ti. Paga tu deuda antes del, <b
                                                        style="color: #de9b57; font-weight: bold;">{{ $arrDatos['fecha_oferta'] }}</b> y el monto
                                                    total adeudado quedará en <b
                                                        style="color: #de9b57; font-weight: bold;">${{ $arrDatos['monto_a_pagar'] }}</b>.</td>
                                            </tr>
                                            <tr>
                                                <td class="parrafo f-23"
                                                    style="font-size: 16px !important; line-height: 24px !important; font-weight: 400; text-align: justify; letter-spacing: -0.03px; padding-top: 10px;">
                                                    Aprovecha este beneficio exclusivo con tarjeta banco Ripley y paga
                                                    el total de la deuda que mantienes pendiente de pago.</td>
                                            </tr>
                                            <tr>
                                                <td height="40"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr
                                style="background-image: url('https://redplazalegal.cl/img/mail/bg-middle.jpg'); background-position: center; background-size: cover; min-height: 548px; max-height: 548px;">
                                <td>
                                    <table style="border-spacing: 0px; width: 100%; padding: 40px;">
                                        <tbody>
                                            <tr>
                                                <td class="parrafo f-23"
                                                    style="font-size: 23px; padding-top: 16px; line-height: 33px; color: #303030; text-align: center; font-weight: 300; font-family: Poppins, sans-serif;">
                                                    <b><span style="color: #de9b57;">{{ $arrDatos['nombre'] }}</span></b></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                        style="color: #546e7a; font-weight: 200; font-size: 14px; font-family: Poppins, sans-serif; border-spacing: 0px;"
                                                        width="85%">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="4" height="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="parrafo f-23"
                                                                    style="font-size: 16px !important; line-height: 24px !important; font-weight: 400; text-align: center; letter-spacing: -0.03px; color: #fff;">
                                                                    Si tienes alguna duda o necesitas ayuda <br /> <b
                                                                        style="color: #de9b57; font-weight: bold;">
                                                                        contactanos a estos teléfonos</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4" height="20"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table style="width: 100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width: 50%;">
                                                                    <p
                                                                        style="max-width: max-content; margin: 0 10px 0 auto; background-color: #de9b57; padding: 7px 12px 12px; border-radius: 3px; letter-spacing: 1.5; font-weight: 400; font-size: 16px; color: #fff;">
                                                                        <img src="https://redplazalegal.cl/img/mail/phone-line-icon.png"
                                                                            style="margin-right: 5px; position: relative; top: 5px;"
                                                                            alt="icono de whatsapp" />600 085 0064</p>
                                                                </td>
                                                                <td style="width: 50%;">
                                                                    <p
                                                                        style="max-width: max-content; margin: 0 0 0 10px; background-color: #de9b57; padding: 7px 12px 12px; border-radius: 3px; letter-spacing: 1.5; font-weight: 400; font-size: 16px; color: #fff;">
                                                                        <img src="https://redplazalegal.cl/img/mail/whatsapp-icon.png"
                                                                            style="margin-right: 5px; position: relative; top: 5px;"
                                                                            alt="icono de whatsapp" />+56 9 6817 0729
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;"><img
                                                        src="https://redplazalegal.cl/img/mail/whatsapp-qr.png" /></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table align="center" border="0" cellpadding="0"
                                                        cellspacing="0"
                                                        style="color: #546e7a; font-weight: 200; font-size: 14px; font-family: Poppins, sans-serif; border-spacing: 0px;"
                                                        width="85%">
                                                        <tbody>
                                                            <tr>
                                                                <td class="parrafo f-23"
                                                                    style="font-size: 16px !important; line-height: 24px !important; font-weight: 400; text-align: center; letter-spacing: -0.03px; color: #fff;">
                                                                    También puedes escribirnos a <br /> <b
                                                                        style="color: #de9b57; font-weight: bold;">
                                                                        info@redplazalegal.cl</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4" height="20"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="contenedor-bloque" border="0" align="center" cellpadding="0"
                                        cellspacing="0" width="60%" style="text-align: center;">
                                        <tbody>
                                            <tr>
                                                <td height="40"></td>
                                            </tr>
                                            <tr>
                                                <td class="parrafo f-23"
                                                    style="font-size: 16px !important; line-height: 24px !important; font-weight: 400; text-align: justify; letter-spacing: -0.03px;">
                                                    No olvides que puedes pagar más rápido y seguro en el home de
                                                    <b>bancoripley.com</b> solo con tu RUT, a través de <b>transferencia
                                                        bancaria</b> o en nuestra <b>app banco Ripley.</b> Encuéntranos
                                                    en más de <b>8.000 puntos de pago,</b> tú eliges!</td>
                                            </tr>
                                            <tr>
                                                <td height="40"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table style="width: 100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        style="border: 1px solid #e1e1e1; padding: 20px; border-radius: 20px; max-width: 120px; height: 180px; display: block; text-align: center; margin: 0 10px 0 auto;">
                                                                        <img
                                                                            src="https://redplazalegal.cl/img/mail/bancoripleyapp.png" />
                                                                        <p style="margin: 10px 0 0 0;"><b><span
                                                                                    style="color: #de9b57;">App
                                                                                </span><br />Banco Ripley</b></p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        style="border: 1px solid #e1e1e1; padding: 20px; border-radius: 20px; max-width: 120px; height: 180px; display: block; text-align: center; margin: 0 auto 0 10px;">
                                                                        <img
                                                                            src="https://redplazalegal.cl/img/mail/bancoripleycom.png" />
                                                                        <p style="margin: 10px 0 0 0;"><b><span
                                                                                    style="color: #de9b57;">Sitio
                                                                                    Web</span><br /> Banco Ripley</b>
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="10"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        style="border: 1px solid #e1e1e1; padding: 20px; border-radius: 20px; max-width: 120px; height: 180px; display: block; text-align: center; margin: 0 10px 0 auto;">
                                                                        <img
                                                                            src="https://redplazalegal.cl/img/mail/ripley.png" />
                                                                        <p style="margin: 10px 0 0 0;"><b><span
                                                                                    style="color: #de9b57;">Tiendas
                                                                                </span><br />Ripley</b></p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        style="border: 1px solid #e1e1e1; padding: 20px; border-radius: 20px; max-width: 120px; height: 180px; display: block; text-align: center; margin: 0 auto 0 10px;">
                                                                        <img
                                                                            src="https://redplazalegal.cl/img/mail/bancoripley.png" />
                                                                        <p style="margin: 10px 0 0 0;"><b><span
                                                                                    style="color: #de9b57;">Sucursales</span><br />
                                                                                Banco Ripley</b></p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr></tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table style="width: 100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td height="10"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span
                                                                        style="border: 1px solid #e1e1e1; padding: 20px; border-radius: 20px; display: block; text-align: center; width: 305px; margin: auto;">
                                                                        <img
                                                                            src="https://redplazalegal.cl/img/mail/logos.png" />
                                                                    </span></td>
                                                            </tr>
                                                            <tr></tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr
                                style="background-image: url('https://redplazalegal.cl/img/mail/bg-end.jpg'); background-position: center; background-size: cover; max-height: 274px; min-height: 274px;">
                                <td>
                                    <table style="border-spacing: 0px; width: 100%; padding: 40px;">
                                        <tbody>
                                            <tr>
                                                <td class="parrafo f-23"
                                                    style="font-size: 23px; padding-top: 16px; line-height: 33px; color: #303030; text-align: center; font-weight: 300; font-family: Poppins, sans-serif;">
                                                    <b>Paga fácil, rápido y olvídate de tus deudas</b></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table align="center" border="0" cellpadding="0"
                                                        cellspacing="0"
                                                        style="color: #546e7a; font-weight: 200; font-size: 14px; font-family: Poppins, sans-serif; border-spacing: 0px;"
                                                        width="85%">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="4" height="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="parrafo f-23"
                                                                    style="font-size: 16px !important; line-height: 24px !important; font-weight: 400; text-align: center; letter-spacing: -0.03px; color: #de9b57;">
                                                                    <b>Si la fecha de recepción de este correo ya
                                                                        pagaste tu cuota, te agradecemos no
                                                                        considerarlo</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4" height="20"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table align="center" border="0" cellpadding="0"
                                                        cellspacing="0"
                                                        style="font-weight: 200; font-size: 14px; font-family: Poppins, sans-serif; border-spacing: 0px;"
                                                        width="85%">
                                                        <tbody>
                                                            <tr>
                                                                <td class="parrafo f-23"
                                                                    style="font-size: 12px !important; line-height: 16px !important; font-weight: 400; text-align: center; color: #303030;">
                                                                    Si el titular de este correo electrónico no
                                                                    corresponde, para evitar futuras gestiones de
                                                                    cobranza, por favor, enviar correo electrónico a
                                                                    g-direccion_cobranzas@ripley.com o llamar al 800 203
                                                                    220</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4" height="20"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <!--footer-->
                            <tr>
                                <td bgcolor="#f6f6f6">
                                    <table class="contenedor-mail-seguro" border="0" align="center"
                                        cellpadding="0" cellspacing="0" bgcolor="#f6f6f6" width="90%">
                                        <tbody>
                                            <tr>
                                                <td height="40"></td>
                                            </tr>
                                            <tr>
                                                <td class="icono-logo-seguro d-block" width="30%"><img
                                                        src="https://redplazalegal.cl/img/mail/correo-seguro.png"
                                                        alt="correo seguro" width="100%" class="w-50" /></td>
                                                <td height="20"></td>
                                                <td class="texto-seguro d-block text-left f-16" width="70%"
                                                    align="left" valign="middle"
                                                    style="font-size: 11px; line-height: 18px;">
                                                    <ul>
                                                        <li class="pb-15">Siempre escribe la dirección de nuestro
                                                            sitio web directamente en el navegador.</li>
                                                        <li class="pb-15">Nunca solicitaremos tus claves de acceso de
                                                            ningúna de tus cuentas, por teléfono o correo electrónico.
                                                        </li>
                                                        <li class="pb-15">No debes abrir o descargar archivos de
                                                            remitentes desconocidos.</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="30"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="0" align="center" cellpadding="0" cellspacing="0"
                                        bgcolor="#f6f6f6" width="100%">
                                        <tbody>
                                            <tr>
                                                <td bgcolor="f6f6f6">
                                                    <table class="contenedor-legales-mail" border="0"
                                                        align="center" cellpadding="0" cellspacing="0"
                                                        width="95%">
                                                        <tbody>
                                                            <tr>
                                                                <td class="texto-legal-footer f-16" align="center"
                                                                    valign="top"
                                                                    style="font-size: 12px; line-height: 130%; font-weight: 400; padding-bottom: 8px;">
                                                                    Para mayor información visita <b>www.<span
                                                                            style="color: #de9b57;">redplazalegal</span>.cl</b>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="30"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <p></p>
</body>

</html>
