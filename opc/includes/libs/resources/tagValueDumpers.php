<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  12  NEW/68                    $1=       0:'AttributeListDumper' ?256                	;1
1  13  NEW/68                    $2=       2:'Config'           ?160                	;1
2  13  CONCAT/8                  #3=       4:'includes\\libs\\resources' 5:'/attributeValueDumpers.php'	;0
3  13  INCLUDE_OR_EVAL/73        $4=       #3                   ?0                  	;8
4  13  SEND_VAR_NO_REF_EX/50     ?80       $4                   ?1                  	;0
5  13  DO_FCALL/60               ?4        ?8                   ?0                  	;0
6  13  SEND_VAR_NO_REF_EX/50     ?80       $2                   ?1                  	;0
7  13  DO_FCALL/60               ?5        ?8                   ?0                  	;0
8  13  ASSIGN/38                 ?6        16?0                 $1                  	;0
9  17  INIT_ARRAY/71             #8=       6:'strval'           7:'int'             	;30
10 17  ADD_ARRAY_ELEMENT/72      #8=       8:NULL               9:'bool'            	;0
11 17  ADD_ARRAY_ELEMENT/72      #8=       10:NULL              11:'enum'           	;0
12 20  INIT_ARRAY/71             #9=       16?0                 ?0                  	;8
13 20  ADD_ARRAY_ELEMENT/72      #9=       12:'dump'            ?0                  	;0
14 20  ADD_ARRAY_ELEMENT/72      #8=       #9                   13:'attribute-list' 	;0
15 22  ADD_ARRAY_ELEMENT/72      #8=       14:'strval'          15:'inf'            	;0
16 23  ADD_ARRAY_ELEMENT/72      #8=       16:'strval'          17:'byterange'      	;0
17 17  ADD_ARRAY_ELEMENT/72      #8=       18:array (
  0 => 'Iso8601Transformer',
  1 => 'toString',
) 19:'datetime'       	;0
18 17  RETURN/62                 ?0        #8                   ?0                  	;0
19 26  NOP/0                     ?0        20:1                 ?0                  	;4294967295
*/

?>