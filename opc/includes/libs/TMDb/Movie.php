<?php


/**
 * 	This class handles all the data you can get from a Movie
 *
 * 	@author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 * 	@version 0.1
 * 	@date 09/01/2015
 * 	@link https://github.com/Alvaroctal/TMDB-PHP-API
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */
class Movie
{
	public $_data;
	public $_tmdb;

	/**
	 * 	Construct Class
	 *
	 * 	@param array $data An array with the data of the Movie
	 */
	public function __construct($data)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  26  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  27  ASSIGN_OBJ/136            ?0        ?2670194192          0:'_data'           	;0
		2  27  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3  28  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/** 
	 * 	Get the Movie's id
	 *
	 * 	@return int
	 */
	public function getID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  40  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  40  FETCH_DIM_R/81            $1=       $0                   1:'id'              	;0
		2  40  RETURN/62                 ?0        $1                   ?0                  	;0
		3  41  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
	 * 	Get the Movie's title
	 *
	 * 	@return string
	 */
	public function getTitle()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  49  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  49  FETCH_DIM_R/81            $1=       $0                   1:'title'           	;0
		2  49  RETURN/62                 ?0        $1                   ?0                  	;0
		3  50  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
	 * 	Get the Movie's tagline
	 *
	 * 	@return string
	 */
	public function getTagline()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  58  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  58  FETCH_DIM_R/81            $1=       $0                   1:'tagline'         	;0
		2  58  RETURN/62                 ?0        $1                   ?0                  	;0
		3  59  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
	 * 	Get the Movie's Poster
	 *
	 * 	@return string
	 */
	public function getPoster()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  67  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  67  FETCH_DIM_R/81            $1=       $0                   1:'poster_path'     	;0
		2  67  RETURN/62                 ?0        $1                   ?0                  	;0
		3  68  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
	 * 	Get the Movie's vote average
	 *
	 * 	@return int
	 */
	public function getVoteAverage()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  76  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  76  FETCH_DIM_R/81            $1=       $0                   1:'vote_average'    	;0
		2  76  RETURN/62                 ?0        $1                   ?0                  	;0
		3  77  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
	 * 	Get the Movie's vote count
	 *
	 * 	@return int
	 */
	public function getVoteCount()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  85  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  85  FETCH_DIM_R/81            $1=       $0                   1:'vote_count'      	;0
		2  85  RETURN/62                 ?0        $1                   ?0                  	;0
		3  86  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
	 * 	Get the Movie's trailers
	 *
	 * 	@return array
	 */
	public function getTrailers()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  94  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  94  FETCH_DIM_R/81            $1=       $0                   1:'trailers'        	;0
		2  94  RETURN/62                 ?0        $1                   ?0                  	;0
		3  95  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
	 * 	Get the Movie's trailer
	 *
	 * 	@return string
	 */
	public function getTrailer()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   103  INIT_METHOD_CALL/112      ?0        ?1669213216          0:'getTrailers'     	;0
		1   103  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		2   103  ASSIGN/38                 ?1        16?0                 $1                  	;0
		3   104  FETCH_DIM_R/81            $3=       16?0                 2:'youtube'         	;0
		4   104  FETCH_DIM_R/81            $4=       $3                   3:0                 	;0
		5   104  FETCH_DIM_R/81            $5=       $4                   4:'source'          	;0
		6   104  RETURN/62                 ?0        $5                   ?0                  	;0
		7   105  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	/** 
	 * 	Get the Movie's genres
	 *
	 * 	@return Genre[]
	 */
	public function getGenres()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   113  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1   115  FETCH_OBJ_R/82            $3=       ?4388664             1:'_data'           	;0
		2   115  FETCH_DIM_R/81            $4=       $3                   2:'genres'          	;0
		3   115  FE_RESET_R/77             $5=       $4                   ?11                 	;0
		4   115  FE_FETCH_R/78             ?0        $5                   16?1                	;11	>>11	<<10
		5   116  NEW/68                    $7=       3:'Genre'            ?96                 	;1
		6   116  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		7   116  DO_FCALL/60               ?6        ?8                   ?0                  	;0
		8   116  ASSIGN_DIM/147            ?4        16?0                 ?4431760            	;0
		9   116  OP_DATA/137               ?0        $7                   ?0                  	;0
		10  116  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		11  116  FE_FREE/127               ?0        $5                   ?0                  	;0	<<3
		12  119  RETURN/62                 ?0        16?0                 ?0                  	;0
		13  120  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	/** 
	 * 	Get the Movie's reviews
	 *
	 * 	@return Review[]
	 */
	public function getReviews()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   128  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1   130  FETCH_OBJ_R/82            $3=       ?1                   1:'_data'           	;0
		2   130  FETCH_DIM_R/81            $4=       $3                   2:'review'          	;0
		3   130  FETCH_DIM_R/81            $5=       $4                   3:'result'          	;0
		4   130  FE_RESET_R/77             $6=       $5                   ?12                 	;0
		5   130  FE_FETCH_R/78             ?0        $6                   16?1                	;12	>>12	<<11
		6   131  NEW/68                    $8=       4:'Review'           ?96                 	;1
		7   131  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		8   131  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		9   131  ASSIGN_DIM/147            ?5        16?0                 ?2670193456         	;0
		10  131  OP_DATA/137               ?0        $8                   ?0                  	;0
		11  131  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
		12  131  FE_FREE/127               ?0        $6                   ?0                  	;0	<<4
		13  134  RETURN/62                 ?0        16?0                 ?0                  	;0
		14  135  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	/** 
	 * 	Get the Movie's companies
	 *
	 * 	@return Company[]
	 */
	public function getCompanies()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   143  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1   145  FETCH_OBJ_R/82            $3=       ?4388664             1:'_data'           	;0
		2   145  FETCH_DIM_R/81            $4=       $3                   2:'production_companies'	;0
		3   145  FE_RESET_R/77             $5=       $4                   ?11                 	;0
		4   145  FE_FETCH_R/78             ?0        $5                   16?1                	;11	>>11	<<10
		5   146  NEW/68                    $7=       3:'Company'          ?96                 	;1
		6   146  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		7   146  DO_FCALL/60               ?6        ?8                   ?0                  	;0
		8   146  ASSIGN_DIM/147            ?4        16?0                 ?4431760            	;0
		9   146  OP_DATA/137               ?0        $7                   ?0                  	;0
		10  146  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		11  146  FE_FREE/127               ?0        $5                   ?0                  	;0	<<3
		12  149  RETURN/62                 ?0        16?0                 ?0                  	;0
		13  150  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 *  Get Generic.<br>
	 *  Get a item of the array, you should not get used to use this, better use specific get's.
	 *
	 * 	@param string $item The item of the $data array you want
	 * 	@return array
	 */
	public function get($item)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   159  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1   160  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2   160  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3   160  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4   160  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5   160  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6   160  FETCH_OBJ_R/82            $4=       ?1667553496          2:'_data'           	;0	<<2
		7   160  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8   160  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9   160  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10  161  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 *	Set an instance of the API
	 *
	 *	@param TMDB $tmdb An instance of the api, necessary for the lazy load
	 */
	public function setAPI($tmdb)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   172  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   173  ASSIGN_OBJ/136            ?0        ?1                   0:'_tmdb'           	;0
		2   173  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   174  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/** 
	 * 	Get the JSON representation of the Movie
	 *
	 * 	@return string
	 */
	public function getJSON()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   186  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1   186  FETCH_OBJ_FUNC_ARG/94     $0=       ?4294967040          2:'_data'           	;1
		2   186  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3   186  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4   186  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5   186  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6   186  RETURN/62                 ?0        $2                   ?0                  	;0
		7   187  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   12   NOP/0                     ?0        ?0                   ?0                  	;0
1   189  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>