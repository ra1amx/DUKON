DAYS {{= datediff({=Variable:DATE2}, {=Variable: DATE1}, "%d" ) }} //количество дней запрашиваемого отпуска

TODAY {{= datediff({=Variable:DATE1}, {=System:DATE}, "%d" ) }} //проверка на 4 дня согласования отпуска

=if ({=Variable:TODAY{{=datediff({=Variable:DATE1}, {=System:DATE}, '%d' ) }}} <4)
	

=if ({=Variable:TODAY{{=datediff({=Variable:DATE1}, {=System:DATE}, '%d' ) }}} >=4)
	
{=Variable:TODAY{{=datediff({=Variable:DATE1}, {=System:DATE}, '%d' ) }}}



	{=if ({=Variable:TODAY{{=datediff({=Document:PROPERTY_DATE1}, {=System:DATE}, '%d' ) }}} >=4)}
{{=datediff({=Variable:DATE1}, {=System:DATE}, '%d' ) }}

{{=if({=Variable:DATE1},{=System:Date},>4)}}


{{=substr({Variable:DATE1},0,10)}} **убираем все лишнее после 10го символа сокразая датавремя до даты