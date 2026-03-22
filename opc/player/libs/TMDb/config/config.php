<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?1                   ?0                  	;0	>>1
1  5   ASSIGN_DIM/147            ?0        16?0                 1:'apikey'          	;0	<<0
2  5   OP_DATA/137               ?0        2:''                 ?0                  	;0
3  6   ASSIGN_DIM/147            ?1        16?0                 3:'lang'            	;0
4  6   OP_DATA/137               ?0        4:'en'               ?0                  	;0
5  7   ASSIGN_DIM/147            ?2        16?0                 5:'adult'           	;0
6  7   OP_DATA/137               ?0        6:false              ?0                  	;0
7  8   ASSIGN_DIM/147            ?3        16?0                 7:'debug'           	;0
8  8   OP_DATA/137               ?0        8:false              ?0                  	;0
9  9   FETCH_DIM_W/84            $5=       16?0                 9:'appender'        	;0
10 9   ASSIGN_DIM/147            ?5        $5                   10:'movie'          	;0
11 9   OP_DATA/137               ?0        11:array (
  'default' => 
  array (
    0 => 'trailers',
    1 => 'images',
    2 => 'credits',
    3 => 'translations',
    4 => 'reviews',
  ),
  'all' => 
  array (
    0 => 'account_states',
    1 => 'alternative_titles',
    2 => 'credits',
    3 => 'images',
    4 => 'keywords',
    5 => 'release_dates',
    6 => 'videos',
    7 => 'translations',
    8 => 'similar',
    9 => 'reviews',
    10 => 'lists',
    11 => 'changes',
    12 => 'rating',
  ),
) ?0                  	;0
12 10  GOTO/253                  ?0        ?13                  ?12                 	;0
13 12  FETCH_DIM_W/84            $7=       16?0                 13:'appender'       	;0
14 12  ASSIGN_DIM/147            ?7        $7                   14:'tvshow'         	;0
15 12  OP_DATA/137               ?0        15:array (
  'default' => 
  array (
    0 => 'trailers',
    1 => 'images',
    2 => 'credits',
    3 => 'translations',
    4 => 'keywords',
  ),
  'all' => 
  array (
    0 => 'account_states',
    1 => 'alternative_titles',
    2 => 'changes',
    3 => 'content_rating',
    4 => 'credits',
    5 => 'external_ids',
    6 => 'images',
    7 => 'keywords',
    8 => 'rating',
    9 => 'similar',
    10 => 'translations',
    11 => 'videos',
  ),
) ?0                  	;0
16 13  FETCH_DIM_W/84            $9=       16?0                 16:'appender'       	;0
17 13  ASSIGN_DIM/147            ?9        $9                   17:'season'         	;0
18 13  OP_DATA/137               ?0        18:array (
  'default' => 
  array (
    0 => 'trailers',
    1 => 'images',
    2 => 'credits',
    3 => 'translations',
  ),
  'all' => 
  array (
    0 => 'changes',
    1 => 'account_states',
    2 => 'credits',
    3 => 'external_ids',
    4 => 'images',
    5 => 'videos',
  ),
) ?0                  	;0
19 14  FETCH_DIM_W/84            $11=      16?0                 19:'appender'       	;0
20 14  ASSIGN_DIM/147            ?11       $11                  20:'episode'        	;0
21 14  OP_DATA/137               ?0        21:array (
  'default' => 
  array (
    0 => 'trailers',
    1 => 'images',
    2 => 'credits',
    3 => 'translations',
  ),
  'all' => 
  array (
    0 => 'changes',
    1 => 'account_states',
    2 => 'credits',
    3 => 'external_ids',
    4 => 'images',
    5 => 'rating',
    6 => 'videos',
  ),
) ?0                  	;0
22 15  FETCH_DIM_W/84            $13=      16?0                 22:'appender'       	;0
23 15  ASSIGN_DIM/147            ?13       $13                  23:'person'         	;0
24 15  OP_DATA/137               ?0        24:array (
  'default' => 
  array (
    0 => 'movie_credits',
    1 => 'tv_credits',
    2 => 'images',
  ),
  'all' => 
  array (
    0 => 'movie_credits',
    1 => 'tv_credits',
    2 => 'combined_credits',
    3 => 'external_ids',
    4 => 'images',
    5 => 'tagged_images',
    6 => 'changes',
  ),
) ?0                  	;0
25 16  FETCH_DIM_W/84            $15=      16?0                 25:'appender'       	;0
26 16  ASSIGN_DIM/147            ?15       $15                  26:'collection'     	;0
27 16  OP_DATA/137               ?0        27:array (
  'default' => 
  array (
    0 => 'images',
  ),
  'all' => 
  array (
    0 => 'images',
  ),
) ?0                  	;0
28 17  GOTO/253                  ?0        ?29                  ?28                 	;0
29 19  FETCH_DIM_W/84            $17=      16?0                 29:'appender'       	;0
30 19  ASSIGN_DIM/147            ?17       $17                  30:'company'        	;0
31 19  OP_DATA/137               ?0        31:array (
  'default' => 
  array (
    0 => 'movies',
  ),
  'all' => 
  array (
    0 => 'movies',
  ),
) ?0                  	;0
32 20  NOP/0                     ?0        32:1                 ?0                  	;4294967295
*/

?>