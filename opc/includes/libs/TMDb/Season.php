<?php


/**
 * 	This class handles all the data you can get from a Season
 *
 * 	@author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 * 	@version 0.1
 * 	@date 11/01/2015
 * 	@link https://github.com/Alvaroctal/TMDB-PHP-API
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */
class Season
{
	private $_data;
	private $_idTVShow;

	/**
     * 	Construct Class
     *
     * 	@param array $data An array with the data of the Season
     */
	public function __construct($data, $idTVShow)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  26  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  26  RECV_INIT/64              16?1=     ?2                   0:0                 	;0
		2  27  ASSIGN_OBJ/136            ?0        ?1                   1:'_data'           	;0
		3  27  OP_DATA/137               ?0        16?0                 ?0                  	;0
		4  28  FETCH_OBJ_W/85            $3=       ?4414262             2:'_data'           	;0
		5  28  ASSIGN_DIM/147            ?2        $3                   3:'tvshow_id'       	;0
		6  28  OP_DATA/137               ?0        16?1                 ?0                  	;0
		7  29  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the Season's id
     *
     * 	@return int
     */
	public function getID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  41  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  41  FETCH_DIM_R/81            $1=       $0                   1:'id'              	;0
		2  41  RETURN/62                 ?0        $1                   ?0                  	;0
		3  42  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the Season's name
     *
     * 	@return string
     */
	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  50  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  50  FETCH_DIM_R/81            $1=       $0                   1:'name'            	;0
		2  50  RETURN/62                 ?0        $1                   ?0                  	;0
		3  51  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     *  Get the Season's TVShow id
     *
     *  @return int
     */
	public function getTVShowID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  59  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  59  FETCH_DIM_R/81            $1=       $0                   1:'tvshow_id'       	;0
		2  59  RETURN/62                 ?0        $1                   ?0                  	;0
		3  60  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the Season's number
     *
     * 	@return int
     */
	public function getSeasonNumber()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  68  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  68  FETCH_DIM_R/81            $1=       $0                   1:'season_number'   	;0
		2  68  RETURN/62                 ?0        $1                   ?0                  	;0
		3  69  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the Season's number of episodes
     *
     * 	@return int
     */
	public function getNumEpisodes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  77  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'count'           	;1
		1  77  FETCH_OBJ_FUNC_ARG/94     $0=       ?1                   2:'_data'           	;1
		2  77  FETCH_DIM_FUNC_ARG/93     $1=       $0                   3:'episodes'        	;1
		3  77  SEND_VAR_EX/66            ?80       $1                   ?1                  	;0
		4  77  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		5  77  RETURN/62                 ?0        $2                   ?0                  	;0
		6  78  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	/**
     *  Get a Seasons's Episode
     *
     *  @param int $numEpisode The episode number
     * 	@return int
     */
	public function getEpisode($numEpisode)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  86  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  87  NEW/68                    $1=       0:'Episode'          ?192                	;1
		2  87  FETCH_OBJ_FUNC_ARG/94     $2=       ?1667553384          2:'_data'           	;1
		3  87  FETCH_DIM_FUNC_ARG/93     $3=       $2                   3:'episodes'        	;1
		4  87  FETCH_DIM_FUNC_ARG/93     $4=       $3                   16?0                	;1
		5  87  SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
		6  87  DO_FCALL/60               ?4        ?8                   ?0                  	;0
		7  87  RETURN/62                 ?0        $1                   ?0                  	;0
		8  88  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	/**
     *  Get the Season's Episodes
     *
     * 	@return Episode[]
     */
	public function getEpisodes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   96   ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1   98   FETCH_OBJ_R/82            $3=       ?4388664             1:'_data'           	;0
		2   98   FETCH_DIM_R/81            $4=       $3                   2:'episodes'        	;0
		3   98   FE_RESET_R/77             $5=       $4                   ?14                 	;0
		4   98   FE_FETCH_R/78             ?0        $5                   16?1                	;14	>>14	<<13
		5   99   NEW/68                    $7=       3:'Episode'          ?192                	;2
		6   99   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		7   99   INIT_METHOD_CALL/112      ?0        ?1669158784          5:'getTVShowID'     	;0
		8   99   DO_FCALL/60               $8=       ?0                   ?0                  	;0
		9   99   SEND_VAR_NO_REF_EX/50     ?96       $8                   ?2                  	;0
		10  99   DO_FCALL/60               ?7        ?8                   ?0                  	;0
		11  99   ASSIGN_DIM/147            ?4        16?0                 ?4431760            	;0
		12  99   OP_DATA/137               ?0        $7                   ?0                  	;0
		13  99   JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		14  99   FE_FREE/127               ?0        $5                   ?0                  	;0	<<3
		15  102  RETURN/62                 ?0        16?0                 ?0                  	;0
		16  103  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the Seasons's Poster
     *
     * 	@return string
     */
	public function getPoster()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   111  FETCH_OBJ_R/82            $0=       ?0                   0:'_data'           	;0
		1   111  FETCH_DIM_R/81            $1=       $0                   1:'poster_path'     	;0
		2   111  RETURN/62                 ?0        $1                   ?0                  	;0
		3   112  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the Season's AirDate
     *
     * 	@return string
     */
	public function getAirDate()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   120  FETCH_OBJ_R/82            $0=       ?0                   0:'_data'           	;0
		1   120  FETCH_DIM_R/81            $1=       $0                   1:'air_date'        	;0
		2   120  RETURN/62                 ?0        $1                   ?0                  	;0
		3   121  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
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
		0   130  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1   131  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2   131  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3   131  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4   131  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5   131  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6   131  FETCH_OBJ_R/82            $4=       ?1667551544          2:'_data'           	;0	<<2
		7   131  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8   131  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9   131  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10  132  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the JSON representation of the Season
     *
     * 	@return string
     */
	public function getJSON()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   144  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1   144  FETCH_OBJ_FUNC_ARG/94     $0=       ?4294967040          2:'_data'           	;1
		2   144  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3   144  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4   144  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5   144  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6   144  RETURN/62                 ?0        $2                   ?0                  	;0
		7   145  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   12   NOP/0                     ?0        ?0                   ?0                  	;0
1   147  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>