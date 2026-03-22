<?php


/**
 * 	This class handles all the data you can get from a Episode
 *
 * 	@author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 * 	@version 0.1
 * 	@date 11/01/2015
 * 	@link https://github.com/Alvaroctal/TMDB-PHP-API
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */
class Episode
{
	private $_data;

	/**
     * 	Construct Class
     *
     * 	@param array $data An array with the data of the Episode
     */
	public function __construct($data, $idTVShow)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  25  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  25  RECV_INIT/64              16?1=     ?2                   0:0                 	;0
		2  26  ASSIGN_OBJ/136            ?0        ?1669133088          1:'_data'           	;0
		3  26  OP_DATA/137               ?0        16?0                 ?0                  	;0
		4  27  FETCH_OBJ_W/85            $3=       ?4414262             2:'_data'           	;0
		5  27  ASSIGN_DIM/147            ?2        $3                   3:'tvshow_id'       	;0
		6  27  OP_DATA/137               ?0        16?1                 ?0                  	;0
		7  28  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the episode's id
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
     * 	Get the Episode's name
     *
     * 	@return string
     */
	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  49  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  49  FETCH_DIM_R/81            $1=       $0                   1:'name'            	;0
		2  49  RETURN/62                 ?0        $1                   ?0                  	;0
		3  50  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
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
		0  58  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  58  FETCH_DIM_R/81            $1=       $0                   1:'tvshow_id'       	;0
		2  58  RETURN/62                 ?0        $1                   ?0                  	;0
		3  59  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     *  Get the Season's number
     *
     *  @return int
     */
	public function getSeasonNumber()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  67  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  67  FETCH_DIM_R/81            $1=       $0                   1:'season_number'   	;0
		2  67  RETURN/62                 ?0        $1                   ?0                  	;0
		3  68  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the Episode's number
     *
     * 	@return string
     */
	public function getEpisodeNumber()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  76  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  76  FETCH_DIM_R/81            $1=       $0                   1:'episode_number'  	;0
		2  76  RETURN/62                 ?0        $1                   ?0                  	;0
		3  77  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     *  Get the Episode's Overview
     *
     *  @return string
     */
	public function getOverview()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  85  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  85  FETCH_DIM_R/81            $1=       $0                   1:'overview'        	;0
		2  85  RETURN/62                 ?0        $1                   ?0                  	;0
		3  86  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the Seasons's Still
     *
     * 	@return string
     */
	public function getStill()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  94  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  94  FETCH_DIM_R/81            $1=       $0                   1:'still_path'      	;0
		2  94  RETURN/62                 ?0        $1                   ?0                  	;0
		3  95  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
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
		0   103  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1   103  FETCH_DIM_R/81            $1=       $0                   1:'air_date'        	;0
		2   103  RETURN/62                 ?0        $1                   ?0                  	;0
		3   104  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the Episode's vote average
     *
     * 	@return int
     */
	public function getVoteAverage()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   112  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1   112  FETCH_DIM_R/81            $1=       $0                   1:'vote_average'    	;0
		2   112  RETURN/62                 ?0        $1                   ?0                  	;0
		3   113  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the Episode's vote count
     *
     * 	@return int
     */
	public function getVoteCount()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   121  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1   121  FETCH_DIM_R/81            $1=       $0                   1:'vote_count'      	;0
		2   121  RETURN/62                 ?0        $1                   ?0                  	;0
		3   122  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
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
		0   131  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1   132  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2   132  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3   132  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4   132  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5   132  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6   132  FETCH_OBJ_R/82            $4=       ?1667552576          2:'_data'           	;0	<<2
		7   132  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8   132  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9   132  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10  133  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * 	Get the JSON representation of the Episode
     *
     * 	@return string
     */
	public function getJSON()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   145  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1   145  FETCH_OBJ_FUNC_ARG/94     $0=       ?2670193888          2:'_data'           	;1
		2   145  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3   145  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4   145  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5   145  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6   145  RETURN/62                 ?0        $2                   ?0                  	;0
		7   146  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   12   NOP/0                     ?0        ?0                   ?0                  	;0
1   148  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>