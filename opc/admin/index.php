<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   INIT_STATIC_METHOD_CALL/113 ?0        0:'Xui\\Functions'   2:'verifyLicense'   	;0
1  3   DO_FCALL/60               $0=       ?0                   ?0                  	;0
2  3   JMPZ/43                   ?0        $0                   ?4                  	;0	>>4
3  4   GOTO/253                  ?0        ?9                   ?4                  	;0
4  6   INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'header'          	;1	<<2
5  6   SEND_VAL_EX/116           ?80       7:'Location: ./license' ?1                  	;0
6  6   DO_FCALL_BY_NAME/131      ?1        ?0                   ?0                  	;0
7  7   EXIT/79                   ?0        ?0                   ?0                  	;0
8  8   GOTO/253                  ?0        ?13                  ?8                  	;0
9  10  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'header'          	;1
10 10  SEND_VAL_EX/116           ?80       11:'Location: ./login' ?1                  	;0
11 10  DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
12 11  EXIT/79                   ?0        ?0                   ?0                  	;0
13 13  NOP/0                     ?0        12:1                 ?0                  	;4294967295
*/

?>