<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   14   ASSIGN/38                 ?0        16?0                 0:array (
  'EXT-X-VERSION' => 
  array (
    'category' => 'playlist',
    'type' => 'int',
    'position' => -3500,
  ),
  'EXT-X-TARGETDURATION' => 
  array (
    'category' => 'media-playlist',
    'type' => 'int',
    'position' => -2900,
  ),
  'EXT-X-MEDIA-SEQUENCE' => 
  array (
    'category' => 'media-playlist',
    'type' => 'int',
    'position' => -2800,
  ),
  'EXT-X-DISCONTINUITY-SEQUENCE' => 
  array (
    'category' => 'media-playlist',
    'type' => 'int',
    'position' => -2700,
  ),
  'EXT-X-PLAYLIST-TYPE' => 
  array (
    'category' => 'media-playlist',
    'type' => 'enum',
    'position' => -2600,
  ),
  'EXT-X-I-FRAMES-ONLY' => 
  array (
    'category' => 'media-playlist',
    'type' => 'bool',
    'position' => -2500,
  ),
  'EXT-X-ENDLIST' => 
  array (
    'category' => 'media-playlist',
    'type' => 'bool',
    'position' => 1000,
  ),
  'EXT-X-MEDIA' => 
  array (
    'category' => 'master-playlist',
    'type' => 
    array (
      'TYPE' => 'enumerated-string',
      'URI' => 'quoted-string',
      'GROUP-ID' => 'quoted-string',
      'LANGUAGE' => 'quoted-string',
      'ASSOC-LANGUAGE' => 'quoted-string',
      'NAME' => 'quoted-string',
      'DEFAULT' => 'enumerated-string',
      'AUTOSELECT' => 'enumerated-string',
      'FORCED' => 'enumerated-string',
      'INSTREAM-ID' => 'quoted-string',
      'CHARACTERISTICS' => 'quoted-string',
      'CHANNELS' => 'quoted-string',
    ),
    'position' => -1900,
    'multiple' => true,
  ),
  'EXT-X-STREAM-INF' => 
  array (
    'category' => 'master-playlist',
    'multiple' => true,
    'type' => 
    array (
      'BANDWIDTH' => 'decimal-integer',
      'AVERAGE-BANDWIDTH' => 'decimal-integer',
      'CODECS' => 'quoted-string',
      'RESOLUTION' => 'decimal-resolution',
      'FRAME-RATE' => 'decimal-floating-point',
      'HDCP-LEVEL' => 'enumerated-string',
      'AUDIO' => 'quoted-string',
      'VIDEO' => 'quoted-string',
      'SUBTITLES' => 'quoted-string',
      'CLOSED-CAPTIONS' => 'quoted-string',
    ),
    'position' => -1800,
    'uriAware' => true,
  ),
  'EXT-X-I-FRAME-STREAM-INF' => 
  array (
    'category' => 'master-playlist',
    'multiple' => true,
    'position' => -1700,
  ),
  'EXT-X-SESSION-DATA' => 
  array (
    'category' => 'master-playlist',
    'type' => 
    array (
      'DATA-ID' => 'quoted-string',
      'VALUE' => 'quoted-string',
      'URI' => 'quoted-string',
      'LANGUAGE' => 'quoted-string',
    ),
    'position' => -1600,
  ),
  'EXT-X-SESSION-KEY' => 
  array (
    'category' => 'master-playlist',
    'position' => -1500,
    'multiple' => true,
  ),
  'EXT-X-INDEPENDENT-SEGMENTS' => 
  array (
    'category' => 'playlist',
    'type' => 'bool',
    'position' => -900,
  ),
  'EXT-X-START' => 
  array (
    'category' => 'playlist',
    'type' => 
    array (
      'TIME-OFFSET' => 'signed-decimal-floating-point',
      'PRECISE' => 'enumerated-string',
    ),
    'position' => -800,
  ),
  'EXT-X-KEY' => 
  array (
    'category' => 'media-segment',
    'type' => 
    array (
      'METHOD' => 'enumerated-string',
      'URI' => 'quoted-string',
      'IV' => 'hexadecimal-sequence',
      'KEYFORMAT' => 'quoted-string',
      'KEYFORMATVERSIONS' => 'quoted-string',
    ),
    'position' => 100,
    'multiple' => true,
  ),
  'EXT-X-MAP' => 
  array (
    'category' => 'media-segment',
    'type' => 
    array (
      'URI' => 'quoted-string',
      'BYTERANGE' => 'byterange',
    ),
    'position' => 200,
  ),
  'EXT-X-BYTERANGE' => 
  array (
    'category' => 'media-segment',
    'type' => 'byterange',
    'position' => 300,
  ),
  'EXT-X-DISCONTINUITY' => 
  array (
    'category' => 'media-segment',
    'position' => 400,
    'type' => 'bool',
  ),
  'EXT-X-PROGRAM-DATE-TIME' => 
  array (
    'category' => 'media-segment',
    'position' => 500,
    'type' => 'datetime',
  ),
  'EXT-X-DATERANGE' => 
  array (
    'category' => 'media-segment',
    'position' => 600,
    'type' => 
    array (
      'ID' => 'quoted-string',
      'CLASS' => 'quoted-string',
      'START-DATE' => 'datetime',
      'END-DATE' => 'datetime',
      'DURATION' => 'decimal-floating-point',
      'PLANNED-DURATION' => 'decimal-floating-point',
      'SCTE35-CMD' => 'hexadecimal-sequence',
      'SCTE35-OUT' => 'hexadecimal-sequence',
      'SCTE35-IN' => 'hexadecimal-sequence',
      'END-ON-NEXT' => 'enumerated-string',
    ),
  ),
  'EXTINF' => 
  array (
    'category' => 'media-segment',
    'type' => 'inf',
    'position' => 1000,
  ),
)	;0
1   188  FETCH_DIM_R/81            $4=       16?0                 3:'EXT-X-STREAM-INF'	;0
2   188  FETCH_DIM_R/81            $5=       $4                   4:'type'            	;0
3   188  FETCH_DIM_W/84            $2=       16?0                 1:'EXT-X-I-FRAME-STREAM-INF'	;0
4   188  ASSIGN_DIM/147            ?2        $2                   2:'type'            	;0
5   188  OP_DATA/137               ?0        $5                   ?0                  	;0
6   190  FETCH_DIM_UNSET/96        $6=       16?0                 5:'EXT-X-I-FRAME-STREAM-INF'	;0
7   190  FETCH_DIM_UNSET/96        $7=       $6                   6:'type'            	;0
8   190  UNSET_DIM/75              ?0        $7                   7:'FRAME-RATE'      	;0
9   191  FETCH_DIM_UNSET/96        $8=       16?0                 8:'EXT-X-I-FRAME-STREAM-INF'	;0
10  191  FETCH_DIM_UNSET/96        $9=       $8                   9:'type'            	;0
11  191  UNSET_DIM/75              ?0        $9                   10:'AUDIO'          	;0
12  192  FETCH_DIM_UNSET/96        $10=      16?0                 11:'EXT-X-I-FRAME-STREAM-INF'	;0
13  192  FETCH_DIM_UNSET/96        $11=      $10                  12:'type'           	;0
14  192  UNSET_DIM/75              ?0        $11                  13:'SUBTITLES'      	;0
15  193  FETCH_DIM_UNSET/96        $12=      16?0                 14:'EXT-X-I-FRAME-STREAM-INF'	;0
16  193  FETCH_DIM_UNSET/96        $13=      $12                  15:'type'           	;0
17  193  UNSET_DIM/75              ?0        $13                  16:'CLOSED-CAPTIONS'	;0
18  195  FETCH_DIM_W/84            $14=      16?0                 17:'EXT-X-I-FRAME-STREAM-INF'	;0
19  195  FETCH_DIM_W/84            $15=      $14                  18:'type'           	;0
20  195  ASSIGN_DIM/147            ?15       $15                  19:'URI'            	;0
21  195  OP_DATA/137               ?0        20:'quoted-string'   ?0                  	;0
22  198  FETCH_DIM_R/81            $19=      16?0                 23:'EXT-X-KEY'      	;0
23  198  FETCH_DIM_R/81            $20=      $19                  24:'type'           	;0
24  198  FETCH_DIM_W/84            $17=      16?0                 21:'EXT-X-SESSION-KEY'	;0
25  198  ASSIGN_DIM/147            ?17       $17                  22:'type'           	;0
26  198  OP_DATA/137               ?0        $20                  ?0                  	;0
27  200  RETURN/62                 ?0        16?0                 ?0                  	;0
28  201  NOP/0                     ?0        25:1                 ?0                  	;4294967295
*/

?>