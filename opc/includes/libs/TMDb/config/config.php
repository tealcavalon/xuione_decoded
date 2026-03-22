<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  8   ASSIGN_DIM/147            ?0        16?0                 0:'apikey'          	;0
1  8   OP_DATA/137               ?0        1:''                 ?0                  	;0
2  9   ASSIGN_DIM/147            ?1        16?0                 2:'lang'            	;0
3  9   OP_DATA/137               ?0        3:'en'               ?0                  	;0
4  10  ASSIGN_DIM/147            ?2        16?0                 4:'adult'           	;0
5  10  OP_DATA/137               ?0        5:false              ?0                  	;0
6  11  ASSIGN_DIM/147            ?3        16?0                 6:'debug'           	;0
7  11  OP_DATA/137               ?0        7:false              ?0                  	;0
8  14  FETCH_DIM_W/84            $5=       16?0                 8:'appender'        	;0
9  14  ASSIGN_DIM/147            ?5        $5                   9:'movie'           	;0
10 15  OP_DATA/137               ?0        10:array (
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
11 18  FETCH_DIM_W/84            $7=       16?0                 11:'appender'       	;0
12 18  ASSIGN_DIM/147            ?7        $7                   12:'tvshow'         	;0
13 19  OP_DATA/137               ?0        13:array (
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
14 22  FETCH_DIM_W/84            $9=       16?0                 14:'appender'       	;0
15 22  ASSIGN_DIM/147            ?9        $9                   15:'season'         	;0
16 23  OP_DATA/137               ?0        16:array (
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
17 26  FETCH_DIM_W/84            $11=      16?0                 17:'appender'       	;0
18 26  ASSIGN_DIM/147            ?11       $11                  18:'episode'        	;0
19 27  OP_DATA/137               ?0        19:array (
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
20 30  FETCH_DIM_W/84            $13=      16?0                 20:'appender'       	;0
21 30  ASSIGN_DIM/147            ?13       $13                  21:'person'         	;0
22 31  OP_DATA/137               ?0        22:array (
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
23 34  FETCH_DIM_W/84            $15=      16?0                 23:'appender'       	;0
24 34  ASSIGN_DIM/147            ?15       $15                  24:'collection'     	;0
25 35  OP_DATA/137               ?0        25:array (
  'default' => 
  array (
    0 => 'images',
  ),
  'all' => 
  array (
    0 => 'images',
  ),
) ?0                  	;0
26 38  FETCH_DIM_W/84            $17=      16?0                 26:'appender'       	;0
27 38  ASSIGN_DIM/147            ?17       $17                  27:'company'        	;0
28 39  OP_DATA/137               ?0        28:array (
  'default' => 
  array (
    0 => 'movies',
  ),
  'all' => 
  array (
    0 => 'movies',
  ),
) ?0                  	;0
29 42  NOP/0                     ?0        29:1                 ?0                  	;4294967295
*/

?>