<?php


class TVShow
{
	private $_data;

	public function __construct($Ae757d5b26893bfe)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0 6  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1 8  ASSIGN_OBJ/136            ?0        ?1660131600          0:'_data'           	;0
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

	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  16  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  16  FETCH_DIM_R/81            $1=       $0                   1:'name'            	;0
		2  16  RETURN/62                 ?0        $1                   ?0                  	;0
		3  17  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getOriginalName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  20  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  20  FETCH_DIM_R/81            $1=       $0                   1:'original_name'   	;0
		2  20  RETURN/62                 ?0        $1                   ?0                  	;0
		3  21  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getNumSeasons()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  24  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  24  FETCH_DIM_R/81            $1=       $0                   1:'number_of_seasons'	;0
		2  24  RETURN/62                 ?0        $1                   ?0                  	;0
		3  25  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getNumEpisodes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  28  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  28  FETCH_DIM_R/81            $1=       $0                   1:'number_of_episodes'	;0
		2  28  RETURN/62                 ?0        $1                   ?0                  	;0
		3  29  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getSeason($c946fae44ff7a585)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  30  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  32  FETCH_OBJ_R/82            $3=       ?2670194757          0:'_data'           	;0
		2  32  FETCH_DIM_R/81            $4=       $3                   1:'seasons'         	;0
		3  32  FE_RESET_R/77             $5=       $4                   ?15                 	;0
		4  32  FE_FETCH_R/78             ?0        $5                   16?1                	;15	>>15	<<14
		5  33  FETCH_DIM_R/81            $6=       16?1                 2:'season_number'   	;0
		6  33  IS_EQUAL/17               #7=       $6                   16?0                	;0
		7  33  BOOL_NOT/13               #8=       #7                   ?0                  	;0
		8  33  JMPZ/43                   ?0        #8                   ?11                 	;0	>>11
		9  34  NOP/0                     ?0        ?0                   ?0                  	;1
		10 34  GOTO/253                  ?0        ?14                  ?3                  	;0
		11 36  ASSIGN/38                 ?6        16?2                 16?1                	;0	<<8
		12 37  FE_FREE/127               ?0        $5                   ?0                  	;1
		13 37  GOTO/253                  ?0        ?16                  ?4                  	;0
		14 39  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		15 39  FE_FREE/127               ?0        $5                   ?0                  	;0	<<3
		16 42  NEW/68                    $10=      5:'Season'           ?96                 	;1
		17 42  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		18 42  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		19 42  RETURN/62                 ?0        $10                  ?0                  	;0
		20 43  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	public function AeBEd02c29877168()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  46  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1  47  FETCH_OBJ_R/82            $3=       ?4388664             1:'_data'           	;0
		2  47  FETCH_DIM_R/81            $4=       $3                   2:'seasons'         	;0
		3  47  FE_RESET_R/77             $5=       $4                   ?14                 	;0
		4  47  FE_FETCH_R/78             ?0        $5                   16?1                	;14	>>14	<<13
		5  48  NEW/68                    $7=       3:'Season'           ?192                	;2
		6  48  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		7  48  INIT_METHOD_CALL/112      ?0        ?1668276368          5:'getID'           	;0
		8  48  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		9  48  SEND_VAR_NO_REF_EX/50     ?96       $8                   ?2                  	;0
		10 48  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		11 48  ASSIGN_DIM/147            ?4        16?0                 ?4431760            	;0
		12 48  OP_DATA/137               ?0        $7                   ?0                  	;0
		13 49  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		14 49  FE_FREE/127               ?0        $5                   ?0                  	;0	<<3
		15 52  RETURN/62                 ?0        16?0                 ?0                  	;0
		16 53  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	public function getPoster()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  56  FETCH_OBJ_R/82            $0=       ?1668277040          0:'_data'           	;0
		1  56  FETCH_DIM_R/81            $1=       $0                   1:'poster_path'     	;0
		2  56  RETURN/62                 ?0        $1                   ?0                  	;0
		3  57  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getBackdrop()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  60  FETCH_OBJ_R/82            $0=       ?1668277040          0:'_data'           	;0
		1  60  FETCH_DIM_R/81            $1=       $0                   1:'backdrop_path'   	;0
		2  60  RETURN/62                 ?0        $1                   ?0                  	;0
		3  61  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getOverview()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  64  FETCH_OBJ_R/82            $0=       ?1668277040          0:'_data'           	;0
		1  64  FETCH_DIM_R/81            $1=       $0                   1:'overview'        	;0
		2  64  RETURN/62                 ?0        $1                   ?0                  	;0
		3  65  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getVoteAverage()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  68  FETCH_OBJ_R/82            $0=       ?1668277040          0:'_data'           	;0
		1  68  FETCH_DIM_R/81            $1=       $0                   1:'vote_average'    	;0
		2  68  RETURN/62                 ?0        $1                   ?0                  	;0
		3  69  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getVoteCount()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  72  FETCH_OBJ_R/82            $0=       ?1668277040          0:'_data'           	;0
		1  72  FETCH_DIM_R/81            $1=       $0                   1:'vote_count'      	;0
		2  72  RETURN/62                 ?0        $1                   ?0                  	;0
		3  73  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getInProduction()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  76  FETCH_OBJ_R/82            $0=       ?1668277040          0:'_data'           	;0
		1  76  FETCH_DIM_R/81            $1=       $0                   1:'in_production'   	;0
		2  76  RETURN/62                 ?0        $1                   ?0                  	;0
		3  77  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function get($bfaffd59f038b138)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  78  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1  80  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2  80  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3  80  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4  80  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5  80  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6  80  FETCH_OBJ_R/82            $4=       ?1661231568          2:'_data'           	;0	<<2
		7  80  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8  80  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9  80  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10 81  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getJSON()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  84  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1  84  FETCH_OBJ_FUNC_ARG/94     $0=       ?4294967040          2:'_data'           	;1
		2  84  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3  84  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4  84  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5  84  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6  84  RETURN/62                 ?0        $2                   ?0                  	;0
		7  85  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   NOP/0                     ?0        ?0                   ?0                  	;0
1  87  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>