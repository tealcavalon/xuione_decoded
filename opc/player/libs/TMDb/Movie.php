<?php


class Movie
{
	public $_data;
	public $_tmdb;

	public function __construct($Ae757d5b26893bfe)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  7   RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  9   ASSIGN_OBJ/136            ?0        ?2670194192          0:'_data'           	;0
		2  9   OP_DATA/137               ?0        16?0                 ?0                  	;0
		3  10  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  13  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  13  FETCH_DIM_R/81            $1=       $0                   1:'id'              	;0
		2  13  RETURN/62                 ?0        $1                   ?0                  	;0
		3  14  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getTitle()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  17  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  17  FETCH_DIM_R/81            $1=       $0                   1:'title'           	;0
		2  17  RETURN/62                 ?0        $1                   ?0                  	;0
		3  18  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getTagline()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  21  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  21  FETCH_DIM_R/81            $1=       $0                   1:'tagline'         	;0
		2  21  RETURN/62                 ?0        $1                   ?0                  	;0
		3  22  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getPoster()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  25  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  25  FETCH_DIM_R/81            $1=       $0                   1:'poster_path'     	;0
		2  25  RETURN/62                 ?0        $1                   ?0                  	;0
		3  26  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getVoteAverage()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  29  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  29  FETCH_DIM_R/81            $1=       $0                   1:'vote_average'    	;0
		2  29  RETURN/62                 ?0        $1                   ?0                  	;0
		3  30  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getVoteCount()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  33  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  33  FETCH_DIM_R/81            $1=       $0                   1:'vote_count'      	;0
		2  33  RETURN/62                 ?0        $1                   ?0                  	;0
		3  34  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getTrailers()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  37  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  37  FETCH_DIM_R/81            $1=       $0                   1:'trailers'        	;0
		2  37  RETURN/62                 ?0        $1                   ?0                  	;0
		3  38  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getTrailer()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  41  INIT_METHOD_CALL/112      ?0        ?1657120096          0:'getTrailers'     	;0
		1  41  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		2  41  ASSIGN/38                 ?1        16?0                 $1                  	;0
		3  42  FETCH_DIM_R/81            $3=       16?0                 2:'youtube'         	;0
		4  42  FETCH_DIM_R/81            $4=       $3                   3:0                 	;0
		5  42  FETCH_DIM_R/81            $5=       $4                   4:'source'          	;0
		6  42  RETURN/62                 ?0        $5                   ?0                  	;0
		7  43  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	public function getGenres()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  46  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1  47  FETCH_OBJ_R/82            $3=       ?4388664             1:'_data'           	;0
		2  47  FETCH_DIM_R/81            $4=       $3                   2:'genres'          	;0
		3  47  FE_RESET_R/77             $5=       $4                   ?11                 	;0
		4  47  FE_FETCH_R/78             ?0        $5                   16?1                	;11	>>11	<<10
		5  48  NEW/68                    $7=       3:'Genre'            ?96                 	;1
		6  48  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		7  48  DO_FCALL/60               ?6        ?8                   ?0                  	;0
		8  48  ASSIGN_DIM/147            ?4        16?0                 ?4431760            	;0
		9  48  OP_DATA/137               ?0        $7                   ?0                  	;0
		10 49  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		11 49  FE_FREE/127               ?0        $5                   ?0                  	;0	<<3
		12 52  RETURN/62                 ?0        16?0                 ?0                  	;0
		13 53  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	public function getReviews()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  56  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1  57  FETCH_OBJ_R/82            $3=       ?1                   1:'_data'           	;0
		2  57  FETCH_DIM_R/81            $4=       $3                   2:'review'          	;0
		3  57  FETCH_DIM_R/81            $5=       $4                   3:'result'          	;0
		4  57  FE_RESET_R/77             $6=       $5                   ?12                 	;0
		5  57  FE_FETCH_R/78             ?0        $6                   16?1                	;12	>>12	<<11
		6  58  NEW/68                    $8=       4:'Review'           ?96                 	;1
		7  58  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		8  58  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		9  58  ASSIGN_DIM/147            ?5        16?0                 ?2670193456         	;0
		10 58  OP_DATA/137               ?0        $8                   ?0                  	;0
		11 59  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
		12 59  FE_FREE/127               ?0        $6                   ?0                  	;0	<<4
		13 62  RETURN/62                 ?0        16?0                 ?0                  	;0
		14 63  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	public function getCompanies()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  66  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1  67  FETCH_OBJ_R/82            $3=       ?4388664             1:'_data'           	;0
		2  67  FETCH_DIM_R/81            $4=       $3                   2:'production_companies'	;0
		3  67  FE_RESET_R/77             $5=       $4                   ?11                 	;0
		4  67  FE_FETCH_R/78             ?0        $5                   16?1                	;11	>>11	<<10
		5  68  NEW/68                    $7=       3:'Company'          ?96                 	;1
		6  68  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		7  68  DO_FCALL/60               ?6        ?8                   ?0                  	;0
		8  68  ASSIGN_DIM/147            ?4        16?0                 ?4431760            	;0
		9  68  OP_DATA/137               ?0        $7                   ?0                  	;0
		10 69  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		11 69  FE_FREE/127               ?0        $5                   ?0                  	;0	<<3
		12 72  RETURN/62                 ?0        16?0                 ?0                  	;0
		13 73  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	public function get($bfaffd59f038b138)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  74  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1  76  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2  76  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3  76  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4  76  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5  76  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6  76  FETCH_OBJ_R/82            $4=       ?1661233528          2:'_data'           	;0	<<2
		7  76  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8  76  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9  76  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10 77  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function setAPI($ad49c670d6a0dda8)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  78  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  80  ASSIGN_OBJ/136            ?0        ?1                   0:'_tmdb'           	;0
		2  80  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3  81  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
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