<?php


class Review
{
	private $_data;

	public function __construct($Ae757d5b26893bfe)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0 6  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1 8  ASSIGN_OBJ/136            ?0        ?1660131680          0:'_data'           	;0
		2 8  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3 9  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  12  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  12  FETCH_DIM_R/81            $1=       $0                   1:'id'              	;0
		2  12  RETURN/62                 ?0        $1                   ?0                  	;0
		3  13  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getAuthor()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  16  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  16  FETCH_DIM_R/81            $1=       $0                   1:'author'          	;0
		2  16  RETURN/62                 ?0        $1                   ?0                  	;0
		3  17  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getContent()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  20  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  20  FETCH_DIM_R/81            $1=       $0                   1:'content'         	;0
		2  20  RETURN/62                 ?0        $1                   ?0                  	;0
		3  21  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function c6ceEc588476ec43()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  24  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  24  FETCH_DIM_R/81            $1=       $0                   1:'url'             	;0
		2  24  RETURN/62                 ?0        $1                   ?0                  	;0
		3  25  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function get($bfaffd59f038b138)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  26  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1  28  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2  28  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3  28  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4  28  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5  28  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6  28  FETCH_OBJ_R/82            $4=       ?1661229960          2:'_data'           	;0	<<2
		7  28  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8  28  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9  28  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10 29  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getJSON()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  32  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1  32  FETCH_OBJ_FUNC_ARG/94     $0=       ?4294967040          2:'_data'           	;1
		2  32  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3  32  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4  32  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5  32  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6  32  RETURN/62                 ?0        $2                   ?0                  	;0
		7  33  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   NOP/0                     ?0        ?0                   ?0                  	;0
1  35  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>