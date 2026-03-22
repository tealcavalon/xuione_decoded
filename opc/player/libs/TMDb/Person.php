<?php


class Person
{
	private $_data;

	public function __construct($Ae757d5b26893bfe)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0 6  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1 8  ASSIGN_OBJ/136            ?0        ?1660130240          0:'_data'           	;0
		2 8  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3 9  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  12  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  12  FETCH_DIM_R/81            $1=       $0                   1:'name'            	;0
		2  12  RETURN/62                 ?0        $1                   ?0                  	;0
		3  13  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  16  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  16  FETCH_DIM_R/81            $1=       $0                   1:'id'              	;0
		2  16  RETURN/62                 ?0        $1                   ?0                  	;0
		3  17  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getProfile()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  20  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  20  FETCH_DIM_R/81            $1=       $0                   1:'profile_path'    	;0
		2  20  RETURN/62                 ?0        $1                   ?0                  	;0
		3  21  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getBirthday()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  24  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  24  FETCH_DIM_R/81            $1=       $0                   1:'birthday'        	;0
		2  24  RETURN/62                 ?0        $1                   ?0                  	;0
		3  25  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getPlaceOfBirth()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  28  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  28  FETCH_DIM_R/81            $1=       $0                   1:'place_of_birth'  	;0
		2  28  RETURN/62                 ?0        $1                   ?0                  	;0
		3  29  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getImbdID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  32  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  32  FETCH_DIM_R/81            $1=       $0                   1:'imdb_id'         	;0
		2  32  RETURN/62                 ?0        $1                   ?0                  	;0
		3  33  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getPopularity()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  36  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  36  FETCH_DIM_R/81            $1=       $0                   1:'popularity'      	;0
		2  36  RETURN/62                 ?0        $1                   ?0                  	;0
		3  37  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getMovieRoles()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  40  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1  41  FETCH_OBJ_R/82            $3=       ?1661232280          1:'_data'           	;0
		2  41  FETCH_DIM_R/81            $4=       $3                   2:'movie_credits'   	;0
		3  41  FETCH_DIM_R/81            $5=       $4                   3:'cast'            	;0
		4  41  FE_RESET_R/77             $6=       $5                   ?15                 	;0
		5  41  FE_FETCH_R/78             ?0        $6                   16?1                	;15	>>15	<<14
		6  42  NEW/68                    $8=       4:'MovieRole'        ?192                	;2
		7  42  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		8  42  INIT_METHOD_CALL/112      ?0        ?1680553568          6:'getID'           	;0
		9  42  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		10 42  SEND_VAR_NO_REF_EX/50     ?96       $9                   ?2                  	;0
		11 42  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		12 42  ASSIGN_DIM/147            ?5        16?0                 ?2670193456         	;0
		13 42  OP_DATA/137               ?0        $8                   ?0                  	;0
		14 43  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
		15 43  FE_FREE/127               ?0        $6                   ?0                  	;0	<<4
		16 46  RETURN/62                 ?0        16?0                 ?0                  	;0
		17 47  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	public function getTVShowRoles()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  50  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1  51  FETCH_OBJ_R/82            $3=       ?1                   1:'_data'           	;0
		2  51  FETCH_DIM_R/81            $4=       $3                   2:'tv_credits'      	;0
		3  51  FETCH_DIM_R/81            $5=       $4                   3:'cast'            	;0
		4  51  FE_RESET_R/77             $6=       $5                   ?15                 	;0
		5  51  FE_FETCH_R/78             ?0        $6                   16?1                	;15	>>15	<<14
		6  52  NEW/68                    $8=       4:'TVShowRole'       ?192                	;2
		7  52  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		8  52  INIT_METHOD_CALL/112      ?0        ?1668265520          6:'getID'           	;0
		9  52  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		10 52  SEND_VAR_NO_REF_EX/50     ?96       $9                   ?2                  	;0
		11 52  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		12 52  ASSIGN_DIM/147            ?5        16?0                 ?2670193456         	;0
		13 52  OP_DATA/137               ?0        $8                   ?0                  	;0
		14 53  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
		15 53  FE_FREE/127               ?0        $6                   ?0                  	;0	<<4
		16 56  RETURN/62                 ?0        16?0                 ?0                  	;0
		17 57  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	public function get($bfaffd59f038b138)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  58  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1  60  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2  60  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3  60  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4  60  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5  60  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6  60  FETCH_OBJ_R/82            $4=       ?1661232232          2:'_data'           	;0	<<2
		7  60  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8  60  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9  60  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10 61  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getJSON()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  64  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1  64  FETCH_OBJ_FUNC_ARG/94     $0=       ?4294967040          2:'_data'           	;1
		2  64  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3  64  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4  64  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5  64  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6  64  RETURN/62                 ?0        $2                   ?0                  	;0
		7  65  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   NOP/0                     ?0        ?0                   ?0                  	;0
1  67  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>