<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Track Material Design Bootstrap Admin Template</title>


        <style>
            .top_menu {font-family : Tahoma;font-size : 13px;color : #FFFFFF; text-decoration : none}
            a.top_menu {font-family : Tahoma;font-size : 13px;color : #FFFFFF; text-decoration : none}
            a:hover.top_menu {font-family : Tahoma;font-size : 13px;color : #7A90A8; text-decoration : none}

            .left_menu {font-family : Tahoma;font-size : 18px;color : #3d6083; text-decoration : none}
            a.left_menu {font-family : Tahoma;font-size : 18px;color : #3d6083; text-decoration : none}
            a:hover.left_menu {font-family : Tahoma;font-size : 18px;color : #7A90A8; text-decoration : none}

            .list_top {font-family : Tahoma; font-size : 14px; color : #3D6083; font-weight: bold}
            .list_text {font-family : Tahoma; font-size : 14px; color : #3D6083; text-decoration : none}
            a.list_text {font-family : Tahoma; font-size : 14px; color : #3D6083; text-decoration : none}
            a:hover.list_text {font-family : Tahoma; font-size : 14px; color : #7A90A8; text-decoration : none}


        </style>
        <?php $this->head() ?>
    </head>

    <body style="margin:0 0 0 0; padding:0 0 0 0">
    <?php $this->beginBody() ?>
    <table width=1280 height=100% align=center cellpadding=0 cellspacing=0 border=0>
        <tr>
            <td width=100% height=127 style="background:url(/images/top.jpg)"></td>
        </tr>
        <tr>
            <td width=100% height=41 style="background:#3d6083">
                <table width=100% height=100% border=0>
                    <tr>
                        <td width=300>&nbsp;</td>
                        <td class=top_menu>
                            <a class=top_menu href="#">ФИО заявителя</a> |
                            <a class=top_menu href="#">№ обращения</a> |
                            <a class=top_menu href="#">Дата обращения</a> |
                            <a class=top_menu href="#">Тональность обращения</a> |
                            <a class=top_menu href="#">Статус обращения</a>
                        </td>
                        <td>
                            <table width=100% border=0 cellpadding=0 cellspacing=0>
                                <tr>
                                    <td align=right><img src="/images/search_left.jpg"></td>
                                    <td valign=center width=250 bgcolor=white><input type=text style="border:#FFFFFF;width:250px;"></td>
                                    <td align=left><img src="/images/search_right.jpg"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width=100%>
                <table width=100% height=100% valign=top cellpadding=20 cellspacing=0 border=0>
                    <tr valign=top>
                        <td width=240 valign=top bgcolor="#eef2f7">
                            <table width=100% border=0 cellpadding=0 cellspacing=0 valign=top>
                                <tr>
                                    <td class=left_menu>
                                        <a class=left_menu href="#">Все заявки</a><br>
                                        <a class=left_menu href="#">Новые заявки</a><br>
                                        <a class=left_menu href="#">Исполненные заявки</a><br>
                                        <a class=left_menu href="#">Архив заявок</a><br>
                                        <a class=left_menu href="#">Шаблоны</a><br>
                                        <a class=left_menu href="#">Настройки</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table width=100% cellpadding=0 cellspacing=0 valign=top border=0>
                                <tr>
                                    <td>

                                        <!-- ������� ���������� ��������� -->

                                        <table width=100% cellpadding=0 cellspacing=0 valign=top border=0>
                                            <tr style="height:7px" height=7>
                                                <td style="height:7px" width=7 height=7><img src="/images/no_answer_lt_corner.png"></td>
                                                <td style="height:7px" width=100% height=7><img src="/images/no_answer_top_line.png" width=100% height=7></td>
                                                <td style="height:7px" width=15 height=7><img src="/images/no_answer_top_middle.png"></td>
                                                <td style="height:7px" width=100% height=7><img src="/images/no_answer_top_line.png" width=100% height=7></td>
                                                <td style="height:7px" width=7 height=7><img src="/images/no_answer_rt_corner.png"></td>
                                            </tr>
                                            <tr>
                                                <td width=7 style="background:url(/images/no_answer_left_line.png)"></td>
                                                <td bgcolor=eef2f7>
                                                    <table width=100% cellpadding=5 cellspacing=0 valign=top border=0>
                                                        <tr>
                                                            <td class=list_top>Иванова Анна Ионовна | Обращение № 1 | 28 июня 2019</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=list_text><a href="#" class=list_text>Возможно ли при обнаружении физическим лицом в Едином государственном реестре индивидуальных предпринимателей недостоверных сведений о себе самом, как о зарегистрированном индивидуальном предпринимателе, подать в регистрирующий орган заявление по форме Р34001?.</a></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width=15 style="background:url(/images/no_answer_line_middle.png)"></td>
                                                <td width=50 bgcolor=eef2f7> </td>
                                                <td width=7 style="background:url(/images/no_answer_right_line.png)"></td>
                                            </tr>
                                            <tr height=7>
                                                <td width=7 height=7><img src="/images/no_answer_lb_corner.png"></td>
                                                <td width=100% height=7><img src="/images/no_answer_bottom_line.png" width=100% height=7></td>
                                                <td width=15 height=7><img src="/images/no_answer_bottom_middle.png"></td>
                                                <td width=100% height=7><img src="/images/no_answer_bottom_line.png" width=100% height=7></td>
                                                <td width=7 height=7><img src="/images/no_answer_rb_corner.png"></td>
                                            </tr>
                                        </table>

                                        <!-- /������� ���������� ��������� -->

                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- ������� ���������� ��������� -->

                                        <table width=100% cellpadding=0 cellspacing=0 valign=top border=0>
                                            <tr>
                                                <td width=7 height=7><img src="/images/no_answer_lt_corner.png"></td>
                                                <td width=7 style="background:url(/images/no_answer_top_line.png)"></td>
                                                <td width=15 height=7><img src="/images/no_answer_top_middle.png"></td>
                                                <td width=7 style="background:url(/images/no_answer_top_line.png)"></td>
                                                <td width=7 height=7><img src="/images/no_answer_rt_corner.png"></td>
                                            </tr>
                                            <tr>
                                                <td width=7 style="background:url(/images/no_answer_left_line.png)"></td>
                                                <td bgcolor=eef2f7>
                                                    <table width=100% cellpadding=5 cellspacing=0 valign=top border=0>
                                                        <tr>
                                                            <td class=list_top>���������� ������� �������� | ��������� � 1 | 28 ���� 2019</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=list_text><a href="#" class=list_text>��� ����� �� �����? ����� ��������� ����� ���� ������������ � �������������� ����� ��� �����������.</a></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width=15 style="background:url(/images/no_answer_line_middle.png)"></td>
                                                <td width=50 bgcolor=eef2f7> </td>
                                                <td width=7 style="background:url(/images/no_answer_right_line.png)"></td>
                                            </tr>
                                            <tr>
                                                <td width=7 height=7><img src="/images/no_answer_lb_corner.png"></td>
                                                <td width=7 style="background:url(/images/no_answer_bottom_line.png)"></td>
                                                <td width=15 height=7><img src="/images/no_answer_bottom_middle.png"></td>
                                                <td width=7 style="background:url(/images/no_answer_bottom_line.png)"></td>
                                                <td width=7 height=7><img src="/images/no_answer_rb_corner.png"></td>
                                            </tr>
                                        </table>

                                        <!-- /������� ���������� ��������� -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- ������� ���������� ��������� -->

                                        <table width=100% cellpadding=0 cellspacing=0 valign=top border=0>
                                            <tr>
                                                <td width=7 height=7><img src="/images/no_answer_lt_corner.png"></td>
                                                <td width=7 style="background:url(/images/no_answer_top_line.png)"></td>
                                                <td width=15 height=7><img src="/images/no_answer_top_middle.png"></td>
                                                <td width=7 style="background:url(/images/no_answer_top_line.png)"></td>
                                                <td width=7 height=7><img src="/images/no_answer_rt_corner.png"></td>
                                            </tr>
                                            <tr>
                                                <td width=7 style="background:url(/images/no_answer_left_line.png)"></td>
                                                <td bgcolor=eef2f7>
                                                    <table width=100% cellpadding=5 cellspacing=0 valign=top border=0>
                                                        <tr>
                                                            <td class=list_top>���������� ������� �������� | ��������� � 1 | 28 ���� 2019</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=list_text><a href="#" class=list_text>��� ����� �� �����? ����� ��������� ����� ���� ������������ � �������������� ����� ��� �����������.</a></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width=15 style="background:url(/images/no_answer_line_middle.png)"></td>
                                                <td width=50 bgcolor=eef2f7> </td>
                                                <td width=7 style="background:url(/images/no_answer_right_line.png)"></td>
                                            </tr>
                                            <tr>
                                                <td width=7 height=7><img src="/images/no_answer_lb_corner.png"></td>
                                                <td width=7 style="background:url(/images/no_answer_bottom_line.png)"></td>
                                                <td width=15 height=7><img src="/images/no_answer_bottom_middle.png"></td>
                                                <td width=7 style="background:url(/images/no_answer_bottom_line.png)"></td>
                                                <td width=7 height=7><img src="/images/no_answer_rb_corner.png"></td>
                                            </tr>
                                        </table>

                                        <!-- /������� ���������� ��������� -->
                                    </td>
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- ������� ���������� ���������������������� -->

                                        <table width=100% cellpadding=0 cellspacing=0 valign=top border=0>
                                            <tr>
                                                <td width=7 height=7><img src="/images/answered_lt_corner.png"></td>
                                                <td width=7 style="background:url(/images/answered_top_line.png)"></td>
                                                <td width=15 height=7><img src="/images/answered_top_middle.png"></td>
                                                <td width=7 style="background:url(/images/answered_top_line.png)"></td>
                                                <td width=7 height=7><img src="/images/answered_rt_corner.png"></td>
                                            </tr>
                                            <tr>
                                                <td width=7 style="background:url(/images/answered_left_line.png)"></td>
                                                <td>
                                                    <table width=100% cellpadding=5 cellspacing=0 valign=top border=0>
                                                        <tr>
                                                            <td class=list_top>���������� ������� �������� | ��������� � 1 | 28 ���� 2019</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=list_text><a href="#" class=list_text>��� ����� �� �����? ����� ��������� ����� ���� ������������ � �������������� ����� ��� �����������.</a></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width=15 style="background:url(/images/answered_line_middle.png)"></td>
                                                <td width=50> </td>
                                                <td width=7 style="background:url(/images/answered_right_line.png)"></td>
                                            </tr>
                                            <tr>
                                                <td width=7 height=7><img src="/images/answered_lb_corner.png"></td>
                                                <td width=7 style="background:url(/images/answered_bottom_line.png)"></td>
                                                <td width=15 height=7><img src="/images/answered_bottom_middle.png"></td>
                                                <td width=7 style="background:url(/images/answered_bottom_line.png)"></td>
                                                <td width=7 height=7><img src="/images/answered_rb_corner.png"></td>
                                            </tr>
                                        </table>

                                        <!-- /������� ���������� ��������� -->
                                    </td>
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- ������� ���������� ���������������������� -->

                                        <table width=100% cellpadding=0 cellspacing=0 valign=top border=0>
                                            <tr>
                                                <td width=7 height=7><img src="/images/answered_lt_corner.png"></td>
                                                <td width=7 style="background:url(/images/answered_top_line.png)"></td>
                                                <td width=15 height=7><img src="/images/answered_top_middle.png"></td>
                                                <td width=7 style="background:url(/images/answered_top_line.png)"></td>
                                                <td width=7 height=7><img src="/images/answered_rt_corner.png"></td>
                                            </tr>
                                            <tr>
                                                <td width=7 style="background:url(/images/answered_left_line.png)"></td>
                                                <td>
                                                    <table width=100% cellpadding=5 cellspacing=0 valign=top border=0>
                                                        <tr>
                                                            <td class=list_top>���������� ������� �������� | ��������� � 1 | 28 ���� 2019</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=list_text><a href="#" class=list_text>��� ����� �� �����? ����� ��������� ����� ���� ������������ � �������������� ����� ��� �����������.</a></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width=15 style="background:url(/images/answered_line_middle.png)"></td>
                                                <td width=50> </td>
                                                <td width=7 style="background:url(/images/answered_right_line.png)"></td>
                                            </tr>
                                            <tr>
                                                <td width=7 height=7><img src="/images/answered_lb_corner.png"></td>
                                                <td width=7 style="background:url(/images/answered_bottom_line.png)"></td>
                                                <td width=15 height=7><img src="/images/answered_bottom_middle.png"></td>
                                                <td width=7 style="background:url(/images/answered_bottom_line.png)"></td>
                                                <td width=7 height=7><img src="/images/answered_rb_corner.png"></td>
                                            </tr>
                                        </table>

                                        <!-- /������� ���������� ��������� -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- ������� ���������� ���������������������� -->

                                        <table width=100% cellpadding=0 cellspacing=0 valign=top border=0>
                                            <tr>
                                                <td width=7 height=7><img src="/images/answered_lt_corner.png"></td>
                                                <td width=7 style="background:url(/images/answered_top_line.png)"></td>
                                                <td width=15 height=7><img src="/images/answered_top_middle.png"></td>
                                                <td width=7 style="background:url(/images/answered_top_line.png)"></td>
                                                <td width=7 height=7><img src="/images/answered_rt_corner.png"></td>
                                            </tr>
                                            <tr>
                                                <td width=7 style="background:url(/images/answered_left_line.png)"></td>
                                                <td>
                                                    <table width=100% cellpadding=5 cellspacing=0 valign=top border=0>
                                                        <tr>
                                                            <td class=list_top>���������� ������� �������� | ��������� � 1 | 28 ���� 2019</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=list_text><a href="#" class=list_text>��� ����� �� �����? ����� ��������� ����� ���� ������������ � �������������� ����� ��� �����������.</a></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width=15 style="background:url(/images/answered_line_middle.png)"></td>
                                                <td width=50> </td>
                                                <td width=7 style="background:url(/images/answered_right_line.png)"></td>
                                            </tr>
                                            <tr>
                                                <td width=7 height=7><img src="/images/answered_lb_corner.png"></td>
                                                <td width=7 style="background:url(/images/answered_bottom_line.png)"></td>
                                                <td width=15 height=7><img src="/images/answered_bottom_middle.png"></td>
                                                <td width=7 style="background:url(/images/answered_bottom_line.png)"></td>
                                                <td width=7 height=7><img src="/images/answered_rb_corner.png"></td>
                                            </tr>
                                        </table>

                                        <!-- /������� ���������� ��������� -->
                                    </td>
                                </tr>



                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>