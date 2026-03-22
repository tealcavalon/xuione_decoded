<?php

function {closure}($value)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  20  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  21  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'trim'            	;2
	2  21  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3  21  SEND_VAL_EX/116           ?96       2:'"'                ?2                  	;0
	4  21  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	5  21  RETURN/62                 ?0        $1                   ?0                  	;0
	6  22  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
	*/
}
function {closure}($value)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  26  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  27  INIT_STATIC_METHOD_CALL/113 ?0        0:'Iso8601Transformer' 2:'fromString'      	;1
	2  27  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'trim'            	;2
	3  27  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4  27  SEND_VAL_EX/116           ?96       6:'"'                ?2                  	;0
	5  27  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	6  27  SEND_VAR_NO_REF_EX/50     ?80       $1                   ?1                  	;0
	7  27  DO_FCALL/60               $2=       ?0                   ?0                  	;0
	8  27  RETURN/62                 ?0        $2                   ?0                  	;0
	9  28  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
	*/
}
function {closure}($value)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  29  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  30  INIT_STATIC_METHOD_CALL/113 ?0        0:'Byterange'        2:'fromString'      	;1
	2  30  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'trim'            	;2
	3  30  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4  30  SEND_VAL_EX/116           ?96       6:'"'                ?2                  	;0
	5  30  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	6  30  SEND_VAR_NO_REF_EX/50     ?80       $1                   ?1                  	;0
	7  30  DO_FCALL/60               $2=       ?0                   ?0                  	;0
	8  30  RETURN/62                 ?0        $2                   ?0                  	;0
	9  31  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
	*/
}
/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  16  INIT_ARRAY/71             #0=       0:'intval'           1:'decimal-integer' 	;38
1  17  ADD_ARRAY_ELEMENT/72      #0=       2:'strval'           3:'hexadecimal-sequence'	;0
2  18  ADD_ARRAY_ELEMENT/72      #0=       4:'floatval'         5:'decimal-floating-point'	;0
3  19  ADD_ARRAY_ELEMENT/72      #0=       6:'floatval'         7:'signed-decimal-floating-point'	;0
4  20  DECLARE_LAMBDA_FUNCTION/153 #1=       8:'' . "\0" . '{closure}/home/xui_main/includes/libs/resources/attributeValueParsers.php0x7f8d6506522c' ?0                  	;0
5  22  ADD_ARRAY_ELEMENT/72      #0=       #1                   9:'quoted-string'   	;0
6  23  ADD_ARRAY_ELEMENT/72      #0=       10:'strval'          11:'enumerated-string'	;0
7  16  ADD_ARRAY_ELEMENT/72      #0=       12:array (
  0 => 'Resolution',
  1 => 'fromString',
) 13:'decimal-resolution'	;0
8  26  DECLARE_LAMBDA_FUNCTION/153 #2=       14:'' . "\0" . '{closure}/home/xui_main/includes/libs/resources/attributeValueParsers.php0x7f8d6506530e' ?0                  	;0
9  28  ADD_ARRAY_ELEMENT/72      #0=       #2                   15:'datetime'       	;0
10 29  DECLARE_LAMBDA_FUNCTION/153 #3=       16:'' . "\0" . '{closure}/home/xui_main/includes/libs/resources/attributeValueParsers.php0x7f8d65065375' ?0                  	;0
11 31  ADD_ARRAY_ELEMENT/72      #0=       #3                   17:'byterange'      	;0
12 31  RETURN/62                 ?0        #0                   ?0                  	;0
13 33  NOP/0                     ?0        18:1                 ?0                  	;4294967295
*/
?>