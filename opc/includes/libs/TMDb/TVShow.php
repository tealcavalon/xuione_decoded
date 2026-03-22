<?php


/**
 * 	This class handles all the data you can get from a TVShow
 *
 * 	@author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 * 	@version 0.1
 * 	@date 11/01/2015
 * 	@link https://github.com/Alvaroctal/TMDB-PHP-API
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */
class TVShow
{
	private $_data;

	/**
     * 	Construct Class
     *
     * 	@param array $data An array with the data of the TVShow
     */
	public function __construct($data)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  25  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  26  ASSIGN_OBJ/136            ?0        ?1669208696          0:'_data'           	;0
		2  26  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3  27  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the TVShow's id
     *
     * 	@return int
     */
	public function getID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  39  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  39  FETCH_DIM_R/81            $1=       $0                   1:'id'              	;0
		2  39  RETURN/62                 ?0        $1                   ?0                  	;0
		3  40  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the TVShow's name
     *
     * 	@return string
     */
	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  48  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  48  FETCH_DIM_R/81            $1=       $0                   1:'name'            	;0
		2  48  RETURN/62                 ?0        $1                   ?0                  	;0
		3  49  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the TVShow's original name
     *
     * 	@return string
     */
	public function getOriginalName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  57  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  57  FETCH_DIM_R/81            $1=       $0                   1:'original_name'   	;0
		2  57  RETURN/62                 ?0        $1                   ?0                  	;0
		3  58  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the TVShow's number of seasons
     *
     * 	@return int
     */
	public function getNumSeasons()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  66  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  66  FETCH_DIM_R/81            $1=       $0                   1:'number_of_seasons'	;0
		2  66  RETURN/62                 ?0        $1                   ?0                  	;0
		3  67  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     *  Get the TVShow's number of episodes
     *
     * 	@return int
     */
	public function getNumEpisodes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  75  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  75  FETCH_DIM_R/81            $1=       $0                   1:'number_of_episodes'	;0
		2  75  RETURN/62                 ?0        $1                   ?0                  	;0
		3  76  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     *  Get a TVShow's season
     *
     *  @param int $numSeason The season number
     * 	@return int
     */
	public function getSeason($numSeason)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  84  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  85  FETCH_OBJ_R/82            $3=       ?2670194759          0:'_data'           	;0
		2  85  FETCH_DIM_R/81            $4=       $3                   1:'seasons'         	;0
		3  85  FE_RESET_R/77             $5=       $4                   ?11                 	;0
		4  85  FE_FETCH_R/78             ?0        $5                   16?1                	;11	>>11	<<10
		5  86  FETCH_DIM_R/81            $6=       16?1                 2:'season_number'   	;0
		6  86  IS_EQUAL/17               #7=       $6                   16?0                	;0
		7  86  JMPZ/43                   ?0        #7                   ?10                 	;0	>>10
		8  87  ASSIGN/38                 ?5        16?2                 16?1                	;0
		9  88  BRK/254                   ?0        ?11                  0:1                 	;0
		10 88  JMP/42                    ?0        ?4                   ?0                  	;0	>>4	<<7
		11 88  FE_FREE/127               ?0        $5                   ?0                  	;0	<<3
		12 91  NEW/68                    $9=       3:'Season'           ?96                 	;1
		13 91  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		14 91  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		15 91  RETURN/62                 ?0        $9                   ?0                  	;0
		16 92  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	/**
     *  Get the TvShow's seasons
     *
     * 	@return Season[]
     */
	public function getSeasons()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   100  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1   102  FETCH_OBJ_R/82            $3=       ?4388664             1:'_data'           	;0
		2   102  FETCH_DIM_R/81            $4=       $3                   2:'seasons'         	;0
		3   102  FE_RESET_R/77             $5=       $4                   ?14                 	;0
		4   102  FE_FETCH_R/78             ?0        $5                   16?1                	;14	>>14	<<13
		5   103  NEW/68                    $7=       3:'Season'           ?192                	;2
		6   103  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		7   103  INIT_METHOD_CALL/112      ?0        ?1669158208          5:'getID'           	;0
		8   103  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		9   103  SEND_VAR_NO_REF_EX/50     ?96       $8                   ?2                  	;0
		10  103  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		11  103  ASSIGN_DIM/147            ?4        16?0                 ?4431760            	;0
		12  103  OP_DATA/137               ?0        $7                   ?0                  	;0
		13  103  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		14  103  FE_FREE/127               ?0        $5                   ?0                  	;0	<<3
		15  106  RETURN/62                 ?0        16?0                 ?0                  	;0
		16  107  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the TVShow's Poster
     *
     * 	@return string
     */
	public function getPoster()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   115  FETCH_OBJ_R/82            $0=       ?0                   0:'_data'           	;0
		1   115  FETCH_DIM_R/81            $1=       $0                   1:'poster_path'     	;0
		2   115  RETURN/62                 ?0        $1                   ?0                  	;0
		3   116  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the TVShow's Backdrop
     *
     * 	@return string
     */
	public function getBackdrop()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   124  FETCH_OBJ_R/82            $0=       ?0                   0:'_data'           	;0
		1   124  FETCH_DIM_R/81            $1=       $0                   1:'backdrop_path'   	;0
		2   124  RETURN/62                 ?0        $1                   ?0                  	;0
		3   125  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the TVShow's Overview
     *
     * 	@return string
     */
	public function getOverview()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   133  FETCH_OBJ_R/82            $0=       ?0                   0:'_data'           	;0
		1   133  FETCH_DIM_R/81            $1=       $0                   1:'overview'        	;0
		2   133  RETURN/62                 ?0        $1                   ?0                  	;0
		3   134  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the TVShow's vote average
     *
     * 	@return int
     */
	public function getVoteAverage()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   142  FETCH_OBJ_R/82            $0=       ?0                   0:'_data'           	;0
		1   142  FETCH_DIM_R/81            $1=       $0                   1:'vote_average'    	;0
		2   142  RETURN/62                 ?0        $1                   ?0                  	;0
		3   143  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the TVShow's vote count
     *
     * 	@return int
     */
	public function getVoteCount()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   151  FETCH_OBJ_R/82            $0=       ?0                   0:'_data'           	;0
		1   151  FETCH_DIM_R/81            $1=       $0                   1:'vote_count'      	;0
		2   151  RETURN/62                 ?0        $1                   ?0                  	;0
		3   152  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get if the TVShow is in production
     *
     * 	@return boolean
     */
	public function getInProduction()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   160  FETCH_OBJ_R/82            $0=       ?0                   0:'_data'           	;0
		1   160  FETCH_DIM_R/81            $1=       $0                   1:'in_production'   	;0
		2   160  RETURN/62                 ?0        $1                   ?0                  	;0
		3   161  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
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
		0   170  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1   171  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2   171  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3   171  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4   171  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5   171  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6   171  FETCH_OBJ_R/82            $4=       ?1667551416          2:'_data'           	;0	<<2
		7   171  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8   171  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9   171  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10  172  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the JSON representation of the TVShow
     *
     * 	@return string
     */
	public function getJSON()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   184  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1   184  FETCH_OBJ_FUNC_ARG/94     $0=       ?4294967040          2:'_data'           	;1
		2   184  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3   184  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4   184  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5   184  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6   184  RETURN/62                 ?0        $2                   ?0                  	;0
		7   185  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   12   NOP/0                     ?0        ?0                   ?0                  	;0
1   187  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>