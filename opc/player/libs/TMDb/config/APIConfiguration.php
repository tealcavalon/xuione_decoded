<?php


class APIConfiguration
{
	private $_data;

	public function __construct($Ae757d5b26893bfe)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0 6  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1 8  ASSIGN_OBJ/136            ?0        ?0                   0:'_data'           	;0
		2 8  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3 9  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getImageBaseURL()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  12  FETCH_OBJ_R/82            $0=       ?7638720             0:'_data'           	;0
		1  12  FETCH_DIM_R/81            $1=       $0                   1:'images'          	;0
		2  12  FETCH_DIM_R/81            $2=       $1                   2:'base_url'        	;0
		3  12  RETURN/62                 ?0        $2                   ?0                  	;0
		4  13  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getSecureImageBaseURL()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  16  FETCH_OBJ_R/82            $0=       ?7638720             0:'_data'           	;0
		1  16  FETCH_DIM_R/81            $1=       $0                   1:'images'          	;0
		2  16  FETCH_DIM_R/81            $2=       $1                   2:'secure_base_url' 	;0
		3  16  RETURN/62                 ?0        $2                   ?0                  	;0
		4  17  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getBackdropSizes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  20  FETCH_OBJ_R/82            $0=       ?7638720             0:'_data'           	;0
		1  20  FETCH_DIM_R/81            $1=       $0                   1:'images'          	;0
		2  20  FETCH_DIM_R/81            $2=       $1                   2:'backdrop_sizes'  	;0
		3  20  RETURN/62                 ?0        $2                   ?0                  	;0
		4  21  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getLogoSizes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  24  FETCH_OBJ_R/82            $0=       ?7638720             0:'_data'           	;0
		1  24  FETCH_DIM_R/81            $1=       $0                   1:'images'          	;0
		2  24  FETCH_DIM_R/81            $2=       $1                   2:'logo_sizes'      	;0
		3  24  RETURN/62                 ?0        $2                   ?0                  	;0
		4  25  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getPosterSizes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  28  FETCH_OBJ_R/82            $0=       ?7638720             0:'_data'           	;0
		1  28  FETCH_DIM_R/81            $1=       $0                   1:'images'          	;0
		2  28  FETCH_DIM_R/81            $2=       $1                   2:'poster_sizes'    	;0
		3  28  RETURN/62                 ?0        $2                   ?0                  	;0
		4  29  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getProfileSizes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  32  FETCH_OBJ_R/82            $0=       ?7638720             0:'_data'           	;0
		1  32  FETCH_DIM_R/81            $1=       $0                   1:'images'          	;0
		2  32  FETCH_DIM_R/81            $2=       $1                   2:'profile_sizes'   	;0
		3  32  RETURN/62                 ?0        $2                   ?0                  	;0
		4  33  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getStillSizes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  36  FETCH_OBJ_R/82            $0=       ?7638720             0:'_data'           	;0
		1  36  FETCH_DIM_R/81            $1=       $0                   1:'images'          	;0
		2  36  FETCH_DIM_R/81            $2=       $1                   2:'still_sizes'     	;0
		3  36  RETURN/62                 ?0        $2                   ?0                  	;0
		4  37  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function get($bfaffd59f038b138)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  38  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1  40  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2  40  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3  40  FETCH_OBJ_R/82            $2=       ?2670193856          1:'_data'           	;0
		4  40  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5  40  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6  40  FETCH_OBJ_R/82            $4=       ?1661231472          2:'_data'           	;0	<<2
		7  40  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8  40  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9  40  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10 41  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getJSON()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  44  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1  44  FETCH_OBJ_FUNC_ARG/94     $0=       ?4430313             2:'_data'           	;1
		2  44  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3  44  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4  44  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5  44  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6  44  RETURN/62                 ?0        $2                   ?0                  	;0
		7  45  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   NOP/0                     ?0        ?0                   ?0                  	;0
1  47  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>