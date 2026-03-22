<?php


class SimpleXMLExtended
{
	public function addCData($A734c30701274baf)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   586  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   588  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'dom_import_simplexml'	;1
		2   588  FETCH_THIS/184            $3=       ?0                   ?0                  	;0
		3   588  SEND_VAR_EX/66            ?80       $3                   ?1                  	;0
		4   588  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		5   588  ASSIGN/38                 ?2        16?1                 $4                  	;0
		6   589  FETCH_OBJ_R/82            $6=       16?1                 2:'ownerDocument'   	;0
		7   589  ASSIGN/38                 ?4        16?2                 $6                  	;0
		8   590  INIT_METHOD_CALL/112      ?0        16?1                 3:'appendChild'     	;1
		9   590  INIT_METHOD_CALL/112      ?0        16?2                 5:'createCDATASection'	;1
		10  590  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		11  590  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		12  590  SEND_VAR_NO_REF_EX/50     ?80       $8                   ?1                  	;0
		13  590  DO_FCALL/60               ?6        ?0                   ?0                  	;0
		14  591  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   642  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   642  BIND_GLOBAL/168           ?0        16?1                 1:'f76e05a7b2c4a341'	;0
	2   643  BOOL_NOT/13               #2=       16?1                 ?0                  	;0
	3   643  JMPZ/43                   ?0        #2                   ?5                  	;0	>>5
	4   644  GOTO/253                  ?0        ?7                   ?2                  	;0
	5   646  INIT_STATIC_METHOD_CALL/113 ?0        3:'XUI'              5:'aEEa5d3137274f80'	;0	<<3
	6   646  DO_FCALL/60               ?1        ?0                   ?0                  	;0
	7   648  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'is_object'       	;1
	8   648  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	9   648  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	10  648  BOOL_NOT/13               #5=       $4                   ?0                  	;0
	11  648  JMPZ/43                   ?0        #5                   ?13                 	;0	>>13
	12  649  GOTO/253                  ?0        ?15                  ?9                  	;0
	13  651  INIT_METHOD_CALL/112      ?0        16?0                 10:'close_mysql'    	;0	<<11
	14  651  DO_FCALL/60               ?4        ?0                   ?0                  	;0
	15  653  NOP/0                     ?0        12:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?1655                ?0                  	;0	>>1655
1    5     FETCH_STATIC_PROP_IS/176  $51=      1:'rRequest'         2:'XUI'             	;0
2    5     ISSET_ISEMPTY_DIM_OBJ/115 #52=      $51                  4:'type'            	;16777216
3    5     BOOL_NOT/13               #53=      #52                  ?0                  	;0
4    5     JMPZ/43                   ?0        #53                  ?9                  	;0	>>9
5    5     FETCH_STATIC_PROP_R/173   $54=      5:'rRequest'         6:'XUI'             	;0
6    5     FETCH_DIM_R/81            $55=      $54                  8:'type'            	;0
7    5     QM_ASSIGN/22              #56=      $55                  ?0                  	;0
8    5     JMP/42                    ?0        ?10                  ?0                  	;0	>>10
9    5     QM_ASSIGN/22              #56=      9:NULL               ?0                  	;0	<<4
10   5     ASSIGN/38                 ?6        16?0                 #56                 	;0	<<8
11   6     FETCH_STATIC_PROP_IS/176  $58=      10:'rRequest'        11:'XUI'            	;0
12   6     ISSET_ISEMPTY_DIM_OBJ/115 #59=      $58                  13:'cat_id'         	;16777216
13   6     BOOL_NOT/13               #60=      #59                  ?0                  	;0
14   6     JMPZ/43                   ?0        #60                  ?22                 	;0	>>22
15   6     INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'intval'         	;1
16   6     FETCH_STATIC_PROP_FUNC_ARG/177 $61=      16:'rRequest'        17:'XUI'            	;1
17   6     FETCH_DIM_FUNC_ARG/93     $62=      $61                  19:'cat_id'         	;1
18   6     SEND_VAR_EX/66            ?80       $62                  ?1                  	;0
19   6     DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
20   6     QM_ASSIGN/22              #64=      $63                  ?0                  	;0
21   6     JMP/42                    ?0        ?23                  ?0                  	;0	>>23
22   6     QM_ASSIGN/22              #64=      20:NULL              ?0                  	;0	<<14
23   6     ASSIGN/38                 ?14       16?1                 #64                 	;0	<<21
24   7     FETCH_STATIC_PROP_IS/176  $66=      21:'rRequest'        22:'XUI'            	;0
25   7     ISSET_ISEMPTY_DIM_OBJ/115 #67=      $66                  24:'scat_id'        	;16777216
26   7     BOOL_NOT/13               #68=      #67                  ?0                  	;0
27   7     JMPZ/43                   ?0        #68                  ?35                 	;0	>>35
28   7     INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'intval'         	;1
29   7     FETCH_STATIC_PROP_FUNC_ARG/177 $69=      27:'rRequest'        28:'XUI'            	;1
30   7     FETCH_DIM_FUNC_ARG/93     $70=      $69                  30:'scat_id'        	;1
31   7     SEND_VAR_EX/66            ?80       $70                  ?1                  	;0
32   7     DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
33   7     QM_ASSIGN/22              #72=      $71                  ?0                  	;0
34   7     JMP/42                    ?0        ?36                  ?0                  	;0	>>36
35   7     QM_ASSIGN/22              #72=      31:NULL              ?0                  	;0	<<27
36   7     ASSIGN/38                 ?22       16?2                 #72                 	;0	<<34
37   8     FETCH_STATIC_PROP_IS/176  $74=      32:'rRequest'        33:'XUI'            	;0
38   8     ISSET_ISEMPTY_DIM_OBJ/115 #75=      $74                  35:'series_id'      	;16777216
39   8     BOOL_NOT/13               #76=      #75                  ?0                  	;0
40   8     JMPZ/43                   ?0        #76                  ?48                 	;0	>>48
41   8     INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'intval'         	;1
42   8     FETCH_STATIC_PROP_FUNC_ARG/177 $77=      38:'rRequest'        39:'XUI'            	;1
43   8     FETCH_DIM_FUNC_ARG/93     $78=      $77                  41:'series_id'      	;1
44   8     SEND_VAR_EX/66            ?80       $78                  ?1                  	;0
45   8     DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
46   8     QM_ASSIGN/22              #80=      $79                  ?0                  	;0
47   8     JMP/42                    ?0        ?49                  ?0                  	;0	>>49
48   8     QM_ASSIGN/22              #80=      42:NULL              ?0                  	;0	<<40
49   8     ASSIGN/38                 ?30       16?3                 #80                 	;0	<<47
50   9     FETCH_STATIC_PROP_IS/176  $82=      43:'rRequest'        44:'XUI'            	;0
51   9     ISSET_ISEMPTY_DIM_OBJ/115 #83=      $82                  46:'season'         	;16777216
52   9     BOOL_NOT/13               #84=      #83                  ?0                  	;0
53   9     JMPZ/43                   ?0        #84                  ?61                 	;0	>>61
54   9     INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'intval'         	;1
55   9     FETCH_STATIC_PROP_FUNC_ARG/177 $85=      49:'rRequest'        50:'XUI'            	;1
56   9     FETCH_DIM_FUNC_ARG/93     $86=      $85                  52:'season'         	;1
57   9     SEND_VAR_EX/66            ?80       $86                  ?1                  	;0
58   9     DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
59   9     QM_ASSIGN/22              #88=      $87                  ?0                  	;0
60   9     JMP/42                    ?0        ?62                  ?0                  	;0	>>62
61   9     QM_ASSIGN/22              #88=      53:NULL              ?0                  	;0	<<53
62   9     ASSIGN/38                 ?38       16?4                 #88                 	;0	<<60
63   10    GOTO/253                  ?0        ?1680                ?54                 	;0
64   13    NEW/68                    $90=      55:'Database'        ?96                 	;1
65   13    SEND_VAL_EX/116           ?80       57:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
66   13    DO_FCALL/60               ?40       ?8                   ?0                  	;0
67   13    ASSIGN/38                 ?41       16?5                 $90                 	;0
68   14    FETCH_STATIC_PROP_W/174   $93=      58:'db'              59:'XUI'            	;0
69   14    ASSIGN_REF/39             ?43       $93                  16?5                	;0
70   15    ASSIGN/38                 ?44       16?6                 61:false            	;0
71   16    INIT_STATIC_METHOD_CALL/113 ?0        62:'XUI'             64:'f1359F4B41c091eC'	;1
72   16    SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
73   16    DO_FCALL/60               ?45       ?0                   ?0                  	;0
74   17    GOTO/253                  ?0        ?1640                ?66                 	;0
75   19    FE_RESET_R/77             $97=      16?8                 ?108                	;0
76   19    FE_FETCH_R/78             ?0        $97                  16?9                	;108	>>108	<<107
77   20    FETCH_STATIC_PROP_R/173   $98=      67:'rCached'         68:'XUI'            	;0
78   20    BOOL_NOT/13               #99=      $98                  ?0                  	;0
79   20    JMPZ/43                   ?0        #99                  ?82                 	;0	>>82
80   21    NOP/0                     ?0        ?0                   ?0                  	;1
81   21    GOTO/253                  ?0        ?96                  ?70                 	;0
82   23    INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'igbinary_unserialize'	;1	<<79
83   23    INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'file_get_contents'	;1
84   23    FETCH_CONSTANT/99         #100=     ?0                   75:'STREAMS_TMP_PATH'	;16
85   23    CONCAT/8                  #101=     #100                 78:'stream_'        	;0
86   23    INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'intval'         	;1
87   23    SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
88   23    DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
89   23    CONCAT/8                  #103=     #101                 $102                	;0
90   23    SEND_VAL_EX/116           ?80       #103                 ?1                  	;0
91   23    DO_FCALL_BY_NAME/131      $104=     ?0                   ?0                  	;0
92   23    SEND_VAR_NO_REF_EX/50     ?80       $104                 ?1                  	;0
93   23    DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
94   23    FETCH_DIM_R/81            $106=     $105                 81:'info'           	;0
95   23    ASSIGN/38                 ?56       16?9                 $106                	;0
96   25    FETCH_DIM_R/81            $108=     16?9                 82:'live'           	;0
97   25    IS_EQUAL/17               #109=     $108                 83:0                	;0
98   25    JMPZ/43                   ?0        #109                 ?101                	;0	>>101
99   26    NOP/0                     ?0        ?0                   ?0                  	;1
100  26    GOTO/253                  ?0        ?105                 ?84                 	;0
101  28    ASSIGN_DIM/147            ?59       16?10                ?4397406            	;0	<<98
102  28    OP_DATA/137               ?0        16?9                 ?0                  	;0
103  29    NOP/0                     ?0        ?0                   ?0                  	;1
104  29    GOTO/253                  ?0        ?107                 ?85                 	;0
105  31    ASSIGN_DIM/147            ?60       16?11                ?0                  	;0
106  31    OP_DATA/137               ?0        16?9                 ?0                  	;0
107  33    JMP/42                    ?0        ?76                  ?0                  	;0	>>76
108  33    FE_FREE/127               ?0        $97                  ?0                  	;0	<<75
109  36    UNSET_CV/196              ?0        16?8                 ?0                  	;0
110  37    SWITCH_STRING/188         ?0        16?0                 86:array (
  'get_live_categories' => 128,
  'get_vod_categories' => 249,
  'get_series_categories' => 370,
  'get_series' => 491,
  'get_seasons' => 709,
  'get_series_streams' => 814,
  'get_live_streams' => 964,
  'get_vod_streams' => 1287,
)	;1490
111  38    CASE/48                   #112=     16?0                 87:'get_live_categories'	;0	>>113
112  38    JMPNZ/44                  ?0        #112                 ?128                	;0	>>128
113  73    CASE/48                   #112=     16?0                 88:'get_vod_categories'	;0	>>115	<<111
114  73    JMPNZ/44                  ?0        #112                 ?249                	;0	>>249
115  108   CASE/48                   #112=     16?0                 89:'get_series_categories'	;0	>>117	<<113
116  108   JMPNZ/44                  ?0        #112                 ?370                	;0	>>370
117  143   CASE/48                   #112=     16?0                 90:'get_series'     	;0	>>119	<<115
118  143   JMPNZ/44                  ?0        #112                 ?491                	;0	>>491
119  222   CASE/48                   #112=     16?0                 91:'get_seasons'    	;0	>>121	<<117
120  222   JMPNZ/44                  ?0        #112                 ?709                	;0	>>709
121  260   CASE/48                   #112=     16?0                 92:'get_series_streams'	;0	>>123	<<119
122  260   JMPNZ/44                  ?0        #112                 ?814                	;0	>>814
123  312   CASE/48                   #112=     16?0                 93:'get_live_streams'	;0	>>125	<<121
124  312   JMPNZ/44                  ?0        #112                 ?964                	;0	>>964
125  430   CASE/48                   #112=     16?0                 94:'get_vod_streams'	;0	>>127	<<123
126  430   JMPNZ/44                  ?0        #112                 ?1287               	;0	>>1287
127  430   JMP/42                    ?0        ?1490                ?0                  	;0	>>1490	<<125
128  39    GOTO/253                  ?0        ?158                 ?95                 	;0	<<112
129  41    GOTO/253                  ?0        ?1667                ?96                 	;0
130  42    GOTO/253                  ?0        ?249                 ?97                 	;0
131  44    INIT_METHOD_CALL/112      ?0        16?12                98:'addChild'       	;1
132  44    SEND_VAL_EX/116           ?80       100:'channel'        ?1                  	;0
133  44    DO_FCALL/60               $113=     ?0                   ?0                  	;0
134  44    ASSIGN/38                 ?63       16?8                 $113                	;0
135  45    INIT_METHOD_CALL/112      ?0        16?8                 101:'addChild'      	;2
136  45    SEND_VAL_EX/116           ?80       103:'title'          ?1                  	;0
137  45    INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'base64_encode' 	;1
138  45    SEND_VAL_EX/116           ?80       106:'All'            ?1                  	;0
139  45    DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
140  45    SEND_VAR_NO_REF_EX/50     ?96       $115                 ?2                  	;0
141  45    DO_FCALL/60               ?65       ?0                   ?0                  	;0
142  46    INIT_METHOD_CALL/112      ?0        16?8                 107:'addChild'      	;2
143  46    SEND_VAL_EX/116           ?80       109:'description'    ?1                  	;0
144  46    INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'base64_encode' 	;1
145  46    SEND_VAL_EX/116           ?80       112:'Live Streams Category [ ALL ]' ?1                  	;0
146  46    DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
147  46    SEND_VAR_NO_REF_EX/50     ?96       $117                 ?2                  	;0
148  46    DO_FCALL/60               ?67       ?0                   ?0                  	;0
149  47    INIT_METHOD_CALL/112      ?0        16?8                 113:'addChild'      	;2
150  47    SEND_VAL_EX/116           ?80       115:'category_id'    ?1                  	;0
151  47    SEND_VAL_EX/116           ?96       116:0                ?2                  	;0
152  47    DO_FCALL/60               ?68       ?0                   ?0                  	;0
153  48    INIT_METHOD_CALL/112      ?0        16?8                 117:'addChild'      	;1
154  48    SEND_VAL_EX/116           ?80       119:'playlist_url'   ?1                  	;0
155  48    DO_FCALL/60               $120=     ?0                   ?0                  	;0
156  48    ASSIGN/38                 ?70       16?13                $120                	;0
157  49    GOTO/253                  ?0        ?187                 ?120                	;0
158  51    NEW/68                    $122=     121:'SimpleXMLExtended' ?96                 	;1
159  51    SEND_VAL_EX/116           ?80       123:'<items/>'       ?1                  	;0
160  51    DO_FCALL/60               ?72       ?8                   ?0                  	;0
161  51    ASSIGN/38                 ?73       16?12                $122                	;0
162  52    INIT_METHOD_CALL/112      ?0        16?12                124:'addChild'      	;2
163  52    SEND_VAL_EX/116           ?80       126:'playlist_name'  ?1                  	;0
164  52    FETCH_STATIC_PROP_R/173   $125=     127:'rSettings'      128:'XUI'           	;0
165  52    FETCH_DIM_R/81            $126=     $125                 130:'server_name'   	;0
166  52    CONCAT/8                  #127=     131:'Live [ '        $126                	;0
167  52    CONCAT/8                  #128=     #127                 132:' ]'            	;0
168  52    SEND_VAL_EX/116           ?96       #128                 ?2                  	;0
169  52    DO_FCALL/60               ?78       ?0                   ?0                  	;0
170  53    INIT_METHOD_CALL/112      ?0        16?12                133:'addChild'      	;1
171  53    SEND_VAL_EX/116           ?80       135:'category'       ?1                  	;0
172  53    DO_FCALL/60               $130=     ?0                   ?0                  	;0
173  53    ASSIGN/38                 ?80       16?14                $130                	;0
174  54    INIT_METHOD_CALL/112      ?0        16?14                136:'addChild'      	;2
175  54    SEND_VAL_EX/116           ?80       138:'category_id'    ?1                  	;0
176  54    SEND_VAL_EX/116           ?96       139:1                ?2                  	;0
177  54    DO_FCALL/60               ?81       ?0                   ?0                  	;0
178  55    INIT_METHOD_CALL/112      ?0        16?14                140:'addChild'      	;2
179  55    SEND_VAL_EX/116           ?80       142:'category_title' ?1                  	;0
180  55    FETCH_STATIC_PROP_R/173   $133=     143:'rSettings'      144:'XUI'           	;0
181  55    FETCH_DIM_R/81            $134=     $133                 146:'server_name'   	;0
182  55    CONCAT/8                  #135=     147:'Live [ '        $134                	;0
183  55    CONCAT/8                  #136=     #135                 148:' ]'            	;0
184  55    SEND_VAL_EX/116           ?96       #136                 ?2                  	;0
185  55    DO_FCALL/60               ?86       ?0                   ?0                  	;0
186  56    GOTO/253                  ?0        ?131                 ?149                	;0
187  58    INIT_METHOD_CALL/112      ?0        16?13                150:'addCData'      	;1
188  58    ROPE_INIT/54              #139=     ?0                   152:'enigma2?username='	;5
189  58    ROPE_ADD/55               #139=     #139                 16?16               	;1
190  58    ROPE_ADD/55               #139=     #139                 153:'&password='    	;2
191  58    ROPE_ADD/55               #139=     #139                 16?17               	;3
192  58    ROPE_END/56               #138=     #139                 154:'&type=get_live_streams&cat_id=0'	;4
193  58    CONCAT/8                  #142=     16?15                #138                	;0
194  58    FETCH_DIM_R/81            $143=     16?14                155:'id'            	;0
195  58    CONCAT/8                  #144=     #142                 $143                	;0
196  58    SEND_VAL_EX/116           ?80       #144                 ?1                  	;0
197  58    DO_FCALL/60               ?94       ?0                   ?0                  	;0
198  59    FE_RESET_R/77             $146=     16?18                ?241                	;0
199  59    FE_FETCH_R/78             #147=     $146                 16?14               	;241	>>241	<<240
200  59    ASSIGN/38                 ?97       16?19                #147                	;0
201  60    INIT_METHOD_CALL/112      ?0        16?12                156:'addChild'      	;1
202  60    SEND_VAL_EX/116           ?80       158:'channel'        ?1                  	;0
203  60    DO_FCALL/60               $149=     ?0                   ?0                  	;0
204  60    ASSIGN/38                 ?99       16?8                 $149                	;0
205  61    INIT_METHOD_CALL/112      ?0        16?8                 159:'addChild'      	;2
206  61    SEND_VAL_EX/116           ?80       161:'title'          ?1                  	;0
207  61    INIT_FCALL_BY_NAME/59     ?0        ?0                   162:'base64_encode' 	;1
208  61    FETCH_DIM_FUNC_ARG/93     $151=     16?14                164:'category_name' 	;1
209  61    SEND_VAR_EX/66            ?80       $151                 ?1                  	;0
210  61    DO_FCALL_BY_NAME/131      $152=     ?0                   ?0                  	;0
211  61    SEND_VAR_NO_REF_EX/50     ?96       $152                 ?2                  	;0
212  61    DO_FCALL/60               ?102      ?0                   ?0                  	;0
213  62    INIT_METHOD_CALL/112      ?0        16?8                 165:'addChild'      	;2
214  62    SEND_VAL_EX/116           ?80       167:'description'    ?1                  	;0
215  62    INIT_FCALL_BY_NAME/59     ?0        ?0                   168:'base64_encode' 	;1
216  62    SEND_VAL_EX/116           ?80       170:'Live Streams Category' ?1                  	;0
217  62    DO_FCALL_BY_NAME/131      $154=     ?0                   ?0                  	;0
218  62    SEND_VAR_NO_REF_EX/50     ?96       $154                 ?2                  	;0
219  62    DO_FCALL/60               ?104      ?0                   ?0                  	;0
220  63    INIT_METHOD_CALL/112      ?0        16?8                 171:'addChild'      	;2
221  63    SEND_VAL_EX/116           ?80       173:'category_id'    ?1                  	;0
222  63    FETCH_DIM_FUNC_ARG/93     $156=     16?14                174:'id'            	;2
223  63    SEND_VAR_EX/66            ?96       $156                 ?2                  	;0
224  63    DO_FCALL/60               ?106      ?0                   ?0                  	;0
225  64    INIT_METHOD_CALL/112      ?0        16?8                 175:'addChild'      	;1
226  64    SEND_VAL_EX/116           ?80       177:'playlist_url'   ?1                  	;0
227  64    DO_FCALL/60               $158=     ?0                   ?0                  	;0
228  64    ASSIGN/38                 ?108      16?13                $158                	;0
229  65    INIT_METHOD_CALL/112      ?0        16?13                178:'addCData'      	;1
230  65    ROPE_INIT/54              #161=     ?0                   180:'enigma2?username='	;5
231  65    ROPE_ADD/55               #161=     #161                 16?16               	;1
232  65    ROPE_ADD/55               #161=     #161                 181:'&password='    	;2
233  65    ROPE_ADD/55               #161=     #161                 16?17               	;3
234  65    ROPE_END/56               #160=     #161                 182:'&type=get_live_streams&cat_id='	;4
235  65    CONCAT/8                  #164=     16?15                #160                	;0
236  65    FETCH_DIM_R/81            $165=     16?14                183:'id'            	;0
237  65    CONCAT/8                  #166=     #164                 $165                	;0
238  65    SEND_VAL_EX/116           ?80       #166                 ?1                  	;0
239  65    DO_FCALL/60               ?116      ?0                   ?0                  	;0
240  66    JMP/42                    ?0        ?199                 ?0                  	;0	>>199
241  66    FE_FREE/127               ?0        $146                 ?0                  	;0	<<198
242  69    INIT_FCALL_BY_NAME/59     ?0        ?0                   184:'header'        	;1
243  69    SEND_VAL_EX/116           ?80       186:'Content-Type: application/xml; charset=utf-8' ?1                  	;0
244  69    DO_FCALL_BY_NAME/131      ?117      ?0                   ?0                  	;0
245  70    INIT_METHOD_CALL/112      ?0        16?12                187:'asXML'         	;0
246  70    DO_FCALL/60               $169=     ?0                   ?0                  	;0
247  70    ECHO/40                   ?0        $169                 ?0                  	;0
248  71    GOTO/253                  ?0        ?129                 ?189                	;0
249  74    GOTO/253                  ?0        ?279                 ?190                	;0	<<114
250  76    INIT_METHOD_CALL/112      ?0        16?12                191:'addChild'      	;1
251  76    SEND_VAL_EX/116           ?80       193:'channel'        ?1                  	;0
252  76    DO_FCALL/60               $170=     ?0                   ?0                  	;0
253  76    ASSIGN/38                 ?120      16?8                 $170                	;0
254  77    INIT_METHOD_CALL/112      ?0        16?8                 194:'addChild'      	;2
255  77    SEND_VAL_EX/116           ?80       196:'title'          ?1                  	;0
256  77    INIT_FCALL_BY_NAME/59     ?0        ?0                   197:'base64_encode' 	;1
257  77    SEND_VAL_EX/116           ?80       199:'All'            ?1                  	;0
258  77    DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
259  77    SEND_VAR_NO_REF_EX/50     ?96       $172                 ?2                  	;0
260  77    DO_FCALL/60               ?122      ?0                   ?0                  	;0
261  78    INIT_METHOD_CALL/112      ?0        16?8                 200:'addChild'      	;2
262  78    SEND_VAL_EX/116           ?80       202:'description'    ?1                  	;0
263  78    INIT_FCALL_BY_NAME/59     ?0        ?0                   203:'base64_encode' 	;1
264  78    SEND_VAL_EX/116           ?80       205:'Movie Streams Category [ ALL ]' ?1                  	;0
265  78    DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
266  78    SEND_VAR_NO_REF_EX/50     ?96       $174                 ?2                  	;0
267  78    DO_FCALL/60               ?124      ?0                   ?0                  	;0
268  79    INIT_METHOD_CALL/112      ?0        16?8                 206:'addChild'      	;2
269  79    SEND_VAL_EX/116           ?80       208:'category_id'    ?1                  	;0
270  79    SEND_VAL_EX/116           ?96       209:0                ?2                  	;0
271  79    DO_FCALL/60               ?125      ?0                   ?0                  	;0
272  80    INIT_METHOD_CALL/112      ?0        16?8                 210:'addChild'      	;1
273  80    SEND_VAL_EX/116           ?80       212:'playlist_url'   ?1                  	;0
274  80    DO_FCALL/60               $177=     ?0                   ?0                  	;0
275  80    ASSIGN/38                 ?127      16?13                $177                	;0
276  81    GOTO/253                  ?0        ?308                 ?213                	;0
277  83    GOTO/253                  ?0        ?1667                ?214                	;0
278  84    GOTO/253                  ?0        ?370                 ?215                	;0
279  86    NEW/68                    $179=     216:'SimpleXMLExtended' ?96                 	;1
280  86    SEND_VAL_EX/116           ?80       218:'<items/>'       ?1                  	;0
281  86    DO_FCALL/60               ?129      ?8                   ?0                  	;0
282  86    ASSIGN/38                 ?130      16?12                $179                	;0
283  87    INIT_METHOD_CALL/112      ?0        16?12                219:'addChild'      	;2
284  87    SEND_VAL_EX/116           ?80       221:'playlist_name'  ?1                  	;0
285  87    FETCH_STATIC_PROP_R/173   $182=     222:'rSettings'      223:'XUI'           	;0
286  87    FETCH_DIM_R/81            $183=     $182                 225:'server_name'   	;0
287  87    CONCAT/8                  #184=     226:'Movie [ '       $183                	;0
288  87    CONCAT/8                  #185=     #184                 227:' ]'            	;0
289  87    SEND_VAL_EX/116           ?96       #185                 ?2                  	;0
290  87    DO_FCALL/60               ?135      ?0                   ?0                  	;0
291  88    INIT_METHOD_CALL/112      ?0        16?12                228:'addChild'      	;1
292  88    SEND_VAL_EX/116           ?80       230:'category'       ?1                  	;0
293  88    DO_FCALL/60               $187=     ?0                   ?0                  	;0
294  88    ASSIGN/38                 ?137      16?14                $187                	;0
295  89    INIT_METHOD_CALL/112      ?0        16?14                231:'addChild'      	;2
296  89    SEND_VAL_EX/116           ?80       233:'category_id'    ?1                  	;0
297  89    SEND_VAL_EX/116           ?96       234:1                ?2                  	;0
298  89    DO_FCALL/60               ?138      ?0                   ?0                  	;0
299  90    INIT_METHOD_CALL/112      ?0        16?14                235:'addChild'      	;2
300  90    SEND_VAL_EX/116           ?80       237:'category_title' ?1                  	;0
301  90    FETCH_STATIC_PROP_R/173   $190=     238:'rSettings'      239:'XUI'           	;0
302  90    FETCH_DIM_R/81            $191=     $190                 241:'server_name'   	;0
303  90    CONCAT/8                  #192=     242:'Movie [ '       $191                	;0
304  90    CONCAT/8                  #193=     #192                 243:' ]'            	;0
305  90    SEND_VAL_EX/116           ?96       #193                 ?2                  	;0
306  90    DO_FCALL/60               ?143      ?0                   ?0                  	;0
307  91    GOTO/253                  ?0        ?250                 ?244                	;0
308  93    INIT_METHOD_CALL/112      ?0        16?13                245:'addCData'      	;1
309  93    ROPE_INIT/54              #196=     ?0                   247:'enigma2?username='	;5
310  93    ROPE_ADD/55               #196=     #196                 16?16               	;1
311  93    ROPE_ADD/55               #196=     #196                 248:'&password='    	;2
312  93    ROPE_ADD/55               #196=     #196                 16?17               	;3
313  93    ROPE_END/56               #195=     #196                 249:'&type=get_vod_streams&cat_id=0'	;4
314  93    CONCAT/8                  #199=     16?15                #195                	;0
315  93    FETCH_DIM_R/81            $200=     16?14                250:'id'            	;0
316  93    CONCAT/8                  #201=     #199                 $200                	;0
317  93    SEND_VAL_EX/116           ?80       #201                 ?1                  	;0
318  93    DO_FCALL/60               ?151      ?0                   ?0                  	;0
319  94    FE_RESET_R/77             $203=     16?20                ?362                	;0
320  94    FE_FETCH_R/78             #204=     $203                 16?14               	;362	>>362	<<361
321  94    ASSIGN/38                 ?154      16?21                #204                	;0
322  95    INIT_METHOD_CALL/112      ?0        16?12                251:'addChild'      	;1
323  95    SEND_VAL_EX/116           ?80       253:'channel'        ?1                  	;0
324  95    DO_FCALL/60               $206=     ?0                   ?0                  	;0
325  95    ASSIGN/38                 ?156      16?8                 $206                	;0
326  96    INIT_METHOD_CALL/112      ?0        16?8                 254:'addChild'      	;2
327  96    SEND_VAL_EX/116           ?80       256:'title'          ?1                  	;0
328  96    INIT_FCALL_BY_NAME/59     ?0        ?0                   257:'base64_encode' 	;1
329  96    FETCH_DIM_FUNC_ARG/93     $208=     16?14                259:'category_name' 	;1
330  96    SEND_VAR_EX/66            ?80       $208                 ?1                  	;0
331  96    DO_FCALL_BY_NAME/131      $209=     ?0                   ?0                  	;0
332  96    SEND_VAR_NO_REF_EX/50     ?96       $209                 ?2                  	;0
333  96    DO_FCALL/60               ?159      ?0                   ?0                  	;0
334  97    INIT_METHOD_CALL/112      ?0        16?8                 260:'addChild'      	;2
335  97    SEND_VAL_EX/116           ?80       262:'description'    ?1                  	;0
336  97    INIT_FCALL_BY_NAME/59     ?0        ?0                   263:'base64_encode' 	;1
337  97    SEND_VAL_EX/116           ?80       265:'Movie Streams Category' ?1                  	;0
338  97    DO_FCALL_BY_NAME/131      $211=     ?0                   ?0                  	;0
339  97    SEND_VAR_NO_REF_EX/50     ?96       $211                 ?2                  	;0
340  97    DO_FCALL/60               ?161      ?0                   ?0                  	;0
341  98    INIT_METHOD_CALL/112      ?0        16?8                 266:'addChild'      	;2
342  98    SEND_VAL_EX/116           ?80       268:'category_id'    ?1                  	;0
343  98    FETCH_DIM_FUNC_ARG/93     $213=     16?14                269:'id'            	;2
344  98    SEND_VAR_EX/66            ?96       $213                 ?2                  	;0
345  98    DO_FCALL/60               ?163      ?0                   ?0                  	;0
346  99    INIT_METHOD_CALL/112      ?0        16?8                 270:'addChild'      	;1
347  99    SEND_VAL_EX/116           ?80       272:'playlist_url'   ?1                  	;0
348  99    DO_FCALL/60               $215=     ?0                   ?0                  	;0
349  99    ASSIGN/38                 ?165      16?13                $215                	;0
350  100   INIT_METHOD_CALL/112      ?0        16?13                273:'addCData'      	;1
351  100   ROPE_INIT/54              #218=     ?0                   275:'enigma2?username='	;5
352  100   ROPE_ADD/55               #218=     #218                 16?16               	;1
353  100   ROPE_ADD/55               #218=     #218                 276:'&password='    	;2
354  100   ROPE_ADD/55               #218=     #218                 16?17               	;3
355  100   ROPE_END/56               #217=     #218                 277:'&type=get_vod_streams&cat_id='	;4
356  100   CONCAT/8                  #221=     16?15                #217                	;0
357  100   FETCH_DIM_R/81            $222=     16?14                278:'id'            	;0
358  100   CONCAT/8                  #223=     #221                 $222                	;0
359  100   SEND_VAL_EX/116           ?80       #223                 ?1                  	;0
360  100   DO_FCALL/60               ?173      ?0                   ?0                  	;0
361  101   JMP/42                    ?0        ?320                 ?0                  	;0	>>320
362  101   FE_FREE/127               ?0        $203                 ?0                  	;0	<<319
363  104   INIT_FCALL_BY_NAME/59     ?0        ?0                   279:'header'        	;1
364  104   SEND_VAL_EX/116           ?80       281:'Content-Type: application/xml; charset=utf-8' ?1                  	;0
365  104   DO_FCALL_BY_NAME/131      ?174      ?0                   ?0                  	;0
366  105   INIT_METHOD_CALL/112      ?0        16?12                282:'asXML'         	;0
367  105   DO_FCALL/60               $226=     ?0                   ?0                  	;0
368  105   ECHO/40                   ?0        $226                 ?0                  	;0
369  106   GOTO/253                  ?0        ?277                 ?284                	;0
370  109   GOTO/253                  ?0        ?371                 ?285                	;0	<<116
371  111   NEW/68                    $227=     286:'SimpleXMLExtended' ?96                 	;1
372  111   SEND_VAL_EX/116           ?80       288:'<items/>'       ?1                  	;0
373  111   DO_FCALL/60               ?177      ?8                   ?0                  	;0
374  111   ASSIGN/38                 ?178      16?12                $227                	;0
375  112   INIT_METHOD_CALL/112      ?0        16?12                289:'addChild'      	;2
376  112   SEND_VAL_EX/116           ?80       291:'playlist_name'  ?1                  	;0
377  112   FETCH_STATIC_PROP_R/173   $230=     292:'rSettings'      293:'XUI'           	;0
378  112   FETCH_DIM_R/81            $231=     $230                 295:'server_name'   	;0
379  112   CONCAT/8                  #232=     296:'SubCategory [ ' $231                	;0
380  112   CONCAT/8                  #233=     #232                 297:' ]'            	;0
381  112   SEND_VAL_EX/116           ?96       #233                 ?2                  	;0
382  112   DO_FCALL/60               ?183      ?0                   ?0                  	;0
383  113   INIT_METHOD_CALL/112      ?0        16?12                298:'addChild'      	;1
384  113   SEND_VAL_EX/116           ?80       300:'category'       ?1                  	;0
385  113   DO_FCALL/60               $235=     ?0                   ?0                  	;0
386  113   ASSIGN/38                 ?185      16?14                $235                	;0
387  114   INIT_METHOD_CALL/112      ?0        16?14                301:'addChild'      	;2
388  114   SEND_VAL_EX/116           ?80       303:'category_id'    ?1                  	;0
389  114   SEND_VAL_EX/116           ?96       304:1                ?2                  	;0
390  114   DO_FCALL/60               ?186      ?0                   ?0                  	;0
391  115   INIT_METHOD_CALL/112      ?0        16?14                305:'addChild'      	;2
392  115   SEND_VAL_EX/116           ?80       307:'category_title' ?1                  	;0
393  115   FETCH_STATIC_PROP_R/173   $238=     308:'rSettings'      309:'XUI'           	;0
394  115   FETCH_DIM_R/81            $239=     $238                 311:'server_name'   	;0
395  115   CONCAT/8                  #240=     312:'SubCategory [ ' $239                	;0
396  115   CONCAT/8                  #241=     #240                 313:' ]'            	;0
397  115   SEND_VAL_EX/116           ?96       #241                 ?2                  	;0
398  115   DO_FCALL/60               ?191      ?0                   ?0                  	;0
399  116   GOTO/253                  ?0        ?464                 ?314                	;0
400  118   GOTO/253                  ?0        ?1667                ?315                	;0
401  119   GOTO/253                  ?0        ?491                 ?316                	;0
402  121   INIT_METHOD_CALL/112      ?0        16?13                317:'addCData'      	;1
403  121   ROPE_INIT/54              #244=     ?0                   319:'enigma2?username='	;5
404  121   ROPE_ADD/55               #244=     #244                 16?16               	;1
405  121   ROPE_ADD/55               #244=     #244                 320:'&password='    	;2
406  121   ROPE_ADD/55               #244=     #244                 16?17               	;3
407  121   ROPE_END/56               #243=     #244                 321:'&type=get_series&cat_id=0'	;4
408  121   CONCAT/8                  #247=     16?15                #243                	;0
409  121   FETCH_DIM_R/81            $248=     16?14                322:'id'            	;0
410  121   CONCAT/8                  #249=     #247                 $248                	;0
411  121   SEND_VAL_EX/116           ?80       #249                 ?1                  	;0
412  121   DO_FCALL/60               ?199      ?0                   ?0                  	;0
413  122   FE_RESET_R/77             $251=     16?22                ?456                	;0
414  122   FE_FETCH_R/78             #252=     $251                 16?14               	;456	>>456	<<455
415  122   ASSIGN/38                 ?202      16?21                #252                	;0
416  123   INIT_METHOD_CALL/112      ?0        16?12                323:'addChild'      	;1
417  123   SEND_VAL_EX/116           ?80       325:'channel'        ?1                  	;0
418  123   DO_FCALL/60               $254=     ?0                   ?0                  	;0
419  123   ASSIGN/38                 ?204      16?8                 $254                	;0
420  124   INIT_METHOD_CALL/112      ?0        16?8                 326:'addChild'      	;2
421  124   SEND_VAL_EX/116           ?80       328:'title'          ?1                  	;0
422  124   INIT_FCALL_BY_NAME/59     ?0        ?0                   329:'base64_encode' 	;1
423  124   FETCH_DIM_FUNC_ARG/93     $256=     16?14                331:'category_name' 	;1
424  124   SEND_VAR_EX/66            ?80       $256                 ?1                  	;0
425  124   DO_FCALL_BY_NAME/131      $257=     ?0                   ?0                  	;0
426  124   SEND_VAR_NO_REF_EX/50     ?96       $257                 ?2                  	;0
427  124   DO_FCALL/60               ?207      ?0                   ?0                  	;0
428  125   INIT_METHOD_CALL/112      ?0        16?8                 332:'addChild'      	;2
429  125   SEND_VAL_EX/116           ?80       334:'description'    ?1                  	;0
430  125   INIT_FCALL_BY_NAME/59     ?0        ?0                   335:'base64_encode' 	;1
431  125   SEND_VAL_EX/116           ?80       337:'TV Series Category' ?1                  	;0
432  125   DO_FCALL_BY_NAME/131      $259=     ?0                   ?0                  	;0
433  125   SEND_VAR_NO_REF_EX/50     ?96       $259                 ?2                  	;0
434  125   DO_FCALL/60               ?209      ?0                   ?0                  	;0
435  126   INIT_METHOD_CALL/112      ?0        16?8                 338:'addChild'      	;2
436  126   SEND_VAL_EX/116           ?80       340:'category_id'    ?1                  	;0
437  126   FETCH_DIM_FUNC_ARG/93     $261=     16?14                341:'id'            	;2
438  126   SEND_VAR_EX/66            ?96       $261                 ?2                  	;0
439  126   DO_FCALL/60               ?211      ?0                   ?0                  	;0
440  127   INIT_METHOD_CALL/112      ?0        16?8                 342:'addChild'      	;1
441  127   SEND_VAL_EX/116           ?80       344:'playlist_url'   ?1                  	;0
442  127   DO_FCALL/60               $263=     ?0                   ?0                  	;0
443  127   ASSIGN/38                 ?213      16?13                $263                	;0
444  128   INIT_METHOD_CALL/112      ?0        16?13                345:'addCData'      	;1
445  128   ROPE_INIT/54              #266=     ?0                   347:'enigma2?username='	;5
446  128   ROPE_ADD/55               #266=     #266                 16?16               	;1
447  128   ROPE_ADD/55               #266=     #266                 348:'&password='    	;2
448  128   ROPE_ADD/55               #266=     #266                 16?17               	;3
449  128   ROPE_END/56               #265=     #266                 349:'&type=get_series&cat_id='	;4
450  128   CONCAT/8                  #269=     16?15                #265                	;0
451  128   FETCH_DIM_R/81            $270=     16?14                350:'id'            	;0
452  128   CONCAT/8                  #271=     #269                 $270                	;0
453  128   SEND_VAL_EX/116           ?80       #271                 ?1                  	;0
454  128   DO_FCALL/60               ?221      ?0                   ?0                  	;0
455  129   JMP/42                    ?0        ?414                 ?0                  	;0	>>414
456  129   FE_FREE/127               ?0        $251                 ?0                  	;0	<<413
457  132   INIT_FCALL_BY_NAME/59     ?0        ?0                   351:'header'        	;1
458  132   SEND_VAL_EX/116           ?80       353:'Content-Type: application/xml; charset=utf-8' ?1                  	;0
459  132   DO_FCALL_BY_NAME/131      ?222      ?0                   ?0                  	;0
460  133   INIT_METHOD_CALL/112      ?0        16?12                354:'asXML'         	;0
461  133   DO_FCALL/60               $274=     ?0                   ?0                  	;0
462  133   ECHO/40                   ?0        $274                 ?0                  	;0
463  134   GOTO/253                  ?0        ?400                 ?356                	;0
464  136   INIT_METHOD_CALL/112      ?0        16?12                357:'addChild'      	;1
465  136   SEND_VAL_EX/116           ?80       359:'channel'        ?1                  	;0
466  136   DO_FCALL/60               $275=     ?0                   ?0                  	;0
467  136   ASSIGN/38                 ?225      16?8                 $275                	;0
468  137   INIT_METHOD_CALL/112      ?0        16?8                 360:'addChild'      	;2
469  137   SEND_VAL_EX/116           ?80       362:'title'          ?1                  	;0
470  137   INIT_FCALL_BY_NAME/59     ?0        ?0                   363:'base64_encode' 	;1
471  137   SEND_VAL_EX/116           ?80       365:'All'            ?1                  	;0
472  137   DO_FCALL_BY_NAME/131      $277=     ?0                   ?0                  	;0
473  137   SEND_VAR_NO_REF_EX/50     ?96       $277                 ?2                  	;0
474  137   DO_FCALL/60               ?227      ?0                   ?0                  	;0
475  138   INIT_METHOD_CALL/112      ?0        16?8                 366:'addChild'      	;2
476  138   SEND_VAL_EX/116           ?80       368:'description'    ?1                  	;0
477  138   INIT_FCALL_BY_NAME/59     ?0        ?0                   369:'base64_encode' 	;1
478  138   SEND_VAL_EX/116           ?80       371:'TV Series Category [ ALL ]' ?1                  	;0
479  138   DO_FCALL_BY_NAME/131      $279=     ?0                   ?0                  	;0
480  138   SEND_VAR_NO_REF_EX/50     ?96       $279                 ?2                  	;0
481  138   DO_FCALL/60               ?229      ?0                   ?0                  	;0
482  139   INIT_METHOD_CALL/112      ?0        16?8                 372:'addChild'      	;2
483  139   SEND_VAL_EX/116           ?80       374:'category_id'    ?1                  	;0
484  139   SEND_VAL_EX/116           ?96       375:0                ?2                  	;0
485  139   DO_FCALL/60               ?230      ?0                   ?0                  	;0
486  140   INIT_METHOD_CALL/112      ?0        16?8                 376:'addChild'      	;1
487  140   SEND_VAL_EX/116           ?80       378:'playlist_url'   ?1                  	;0
488  140   DO_FCALL/60               $282=     ?0                   ?0                  	;0
489  140   ASSIGN/38                 ?232      16?13                $282                	;0
490  141   GOTO/253                  ?0        ?402                 ?379                	;0
491  144   GOTO/253                  ?0        ?537                 ?380                	;0	<<118
492  146   INIT_METHOD_CALL/112      ?0        16?14                381:'addChild'      	;2
493  146   SEND_VAL_EX/116           ?80       383:'category_id'    ?1                  	;0
494  146   SEND_VAL_EX/116           ?96       384:1                ?2                  	;0
495  146   DO_FCALL/60               ?233      ?0                   ?0                  	;0
496  147   INIT_METHOD_CALL/112      ?0        16?14                385:'addChild'      	;2
497  147   SEND_VAL_EX/116           ?80       387:'category_title' ?1                  	;0
498  147   ROPE_INIT/54              #286=     ?0                   388:'TV Series [ '  	;3
499  147   ROPE_ADD/55               #286=     #286                 16?23               	;1
500  147   ROPE_END/56               #285=     #286                 389:' ]'            	;2
501  147   SEND_VAL_EX/116           ?96       #285                 ?2                  	;0
502  147   DO_FCALL/60               ?237      ?0                   ?0                  	;0
503  148   INIT_FCALL_BY_NAME/59     ?0        ?0                   390:'count'         	;1
504  148   FETCH_DIM_FUNC_ARG/93     $289=     16?7                 392:'series_ids'    	;1
505  148   SEND_VAR_EX/66            ?80       $289                 ?1                  	;0
506  148   DO_FCALL_BY_NAME/131      $290=     ?0                   ?0                  	;0
507  148   IS_SMALLER/19             #291=     393:0                $290                	;0
508  148   BOOL_NOT/13               #292=     #291                 ?0                  	;0
509  148   JMPZ/43                   ?0        #292                 ?511                	;0	>>511
510  149   GOTO/253                  ?0        ?679                 ?394                	;0
511  151   FETCH_STATIC_PROP_R/173   $293=     395:'rSettings'      396:'XUI'           	;0	<<509
512  151   FETCH_DIM_R/81            $294=     $293                 398:'vod_sort_newest'	;0
513  151   JMPZ/43                   ?0        $294                 ?515                	;0	>>515
514  152   GOTO/253                  ?0        ?689                 ?399                	;0
515  154   INIT_METHOD_CALL/112      ?0        16?5                 400:'query'         	;1	<<513
516  154   INIT_FCALL_BY_NAME/59     ?0        ?0                   402:'implode'       	;2
517  154   SEND_VAL_EX/116           ?80       404:','              ?1                  	;0
518  154   INIT_FCALL_BY_NAME/59     ?0        ?0                   405:'array_map'     	;2
519  154   SEND_VAL_EX/116           ?80       407:'intval'         ?1                  	;0
520  154   FETCH_DIM_FUNC_ARG/93     $295=     16?7                 408:'series_ids'    	;2
521  154   SEND_VAR_EX/66            ?96       $295                 ?2                  	;0
522  154   DO_FCALL_BY_NAME/131      $296=     ?0                   ?0                  	;0
523  154   SEND_VAR_NO_REF_EX/50     ?96       $296                 ?2                  	;0
524  154   DO_FCALL_BY_NAME/131      $297=     ?0                   ?0                  	;0
525  154   CONCAT/8                  #298=     409:'SELECT * FROM `streams_series` WHERE `id` IN (' $297                	;0
526  154   CONCAT/8                  #299=     #298                 410:') ORDER BY FIELD(`id`,'	;0
527  154   INIT_FCALL_BY_NAME/59     ?0        ?0                   411:'implode'       	;2
528  154   SEND_VAL_EX/116           ?80       413:','              ?1                  	;0
529  154   FETCH_DIM_FUNC_ARG/93     $300=     16?7                 414:'series_ids'    	;2
530  154   SEND_VAR_EX/66            ?96       $300                 ?2                  	;0
531  154   DO_FCALL_BY_NAME/131      $301=     ?0                   ?0                  	;0
532  154   CONCAT/8                  #302=     #299                 $301                	;0
533  154   CONCAT/8                  #303=     #302                 415:') ASC;'        	;0
534  154   SEND_VAL_EX/116           ?80       #303                 ?1                  	;0
535  154   DO_FCALL/60               ?253      ?0                   ?0                  	;0
536  155   GOTO/253                  ?0        ?688                 ?416                	;0
537  157   ISSET_ISEMPTY_CV/197      #305=     16?1                 ?0                  	;33554432
538  157   JMPNZ_EX/47               #305=     #305                 ?543                	;0	>>543
539  157   INIT_FCALL_BY_NAME/59     ?0        ?0                   417:'is_null'       	;1
540  157   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
541  157   DO_FCALL_BY_NAME/131      $306=     ?0                   ?0                  	;0
542  157   BOOL/52                   #305=     $306                 ?0                  	;0
543  157   JMPNZ_EX/47               #305=     #305                 ?551                	;0	>>551	<<538
544  157   ISSET_ISEMPTY_CV/197      #307=     16?2                 ?0                  	;33554432
545  157   JMPNZ_EX/47               #307=     #307                 ?550                	;0	>>550
546  157   INIT_FCALL_BY_NAME/59     ?0        ?0                   419:'is_null'       	;1
547  157   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
548  157   DO_FCALL_BY_NAME/131      $308=     ?0                   ?0                  	;0
549  157   BOOL/52                   #307=     $308                 ?0                  	;0
550  157   BOOL/52                   #305=     #307                 ?0                  	;0	<<545
551  157   BOOL_NOT/13               #309=     #305                 ?0                  	;0	<<543
552  157   JMPZ/43                   ?0        #309                 ?554                	;0	>>554
553  158   GOTO/253                  ?0        ?686                 ?421                	;0
554  160   INIT_FCALL_BY_NAME/59     ?0        ?0                   422:'is_null'       	;1	<<552
555  160   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
556  160   DO_FCALL_BY_NAME/131      $310=     ?0                   ?0                  	;0
557  160   JMPZ/43                   ?0        $310                 ?560                	;0	>>560
558  160   QM_ASSIGN/22              #311=     424:NULL             ?0                  	;0
559  160   JMP/42                    ?0        ?561                 ?0                  	;0	>>561
560  160   QM_ASSIGN/22              #311=     16?1                 ?0                  	;0	<<557
561  160   ASSIGN/38                 ?261      16?19                #311                	;0	<<559
562  161   INIT_FCALL_BY_NAME/59     ?0        ?0                   425:'is_null'       	;1
563  161   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
564  161   DO_FCALL_BY_NAME/131      $313=     ?0                   ?0                  	;0
565  161   BOOL_NOT/13               #314=     $313                 ?0                  	;0
566  161   JMPZ/43                   ?0        #314                 ?568                	;0	>>568
567  162   GOTO/253                  ?0        ?578                 ?427                	;0
568  164   INIT_FCALL_BY_NAME/59     ?0        ?0                   428:'is_null'       	;1	<<566
569  164   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
570  164   DO_FCALL_BY_NAME/131      $315=     ?0                   ?0                  	;0
571  164   JMPZ/43                   ?0        $315                 ?574                	;0	>>574
572  164   QM_ASSIGN/22              #316=     430:NULL             ?0                  	;0
573  164   JMP/42                    ?0        ?575                 ?0                  	;0	>>575
574  164   QM_ASSIGN/22              #316=     16?2                 ?0                  	;0	<<571
575  164   ASSIGN/38                 ?266      16?19                #316                	;0	<<573
576  165   ASSIGN/38                 ?267      16?1                 16?2                	;0
577  166   GOTO/253                  ?0        ?578                 ?431                	;0
578  169   ISSET_ISEMPTY_DIM_OBJ/115 #319=     16?22                16?1                	;16777216
579  169   BOOL_NOT/13               #320=     #319                 ?0                  	;0
580  169   JMPZ/43                   ?0        #320                 ?585                	;0	>>585
581  169   FETCH_DIM_R/81            $321=     16?22                16?1                	;0
582  169   FETCH_DIM_R/81            $322=     $321                 432:'category_name' 	;0
583  169   QM_ASSIGN/22              #323=     $322                 ?0                  	;0
584  169   JMP/42                    ?0        ?586                 ?0                  	;0	>>586
585  169   QM_ASSIGN/22              #323=     433:'ALL'            ?0                  	;0	<<580
586  169   ASSIGN/38                 ?273      16?23                #323                	;0	<<584
587  170   NEW/68                    $325=     434:'SimpleXMLExtended' ?96                 	;1
588  170   SEND_VAL_EX/116           ?80       436:'<items/>'       ?1                  	;0
589  170   DO_FCALL/60               ?275      ?8                   ?0                  	;0
590  170   ASSIGN/38                 ?276      16?12                $325                	;0
591  171   INIT_METHOD_CALL/112      ?0        16?12                437:'addChild'      	;2
592  171   SEND_VAL_EX/116           ?80       439:'playlist_name'  ?1                  	;0
593  171   ROPE_INIT/54              #329=     ?0                   440:'TV Series [ '  	;3
594  171   ROPE_ADD/55               #329=     #329                 16?23               	;1
595  171   ROPE_END/56               #328=     #329                 441:' ]'            	;2
596  171   SEND_VAL_EX/116           ?96       #328                 ?2                  	;0
597  171   DO_FCALL/60               ?280      ?0                   ?0                  	;0
598  172   INIT_METHOD_CALL/112      ?0        16?12                442:'addChild'      	;1
599  172   SEND_VAL_EX/116           ?80       444:'category'       ?1                  	;0
600  172   DO_FCALL/60               $332=     ?0                   ?0                  	;0
601  172   ASSIGN/38                 ?282      16?14                $332                	;0
602  173   GOTO/253                  ?0        ?492                 ?445                	;0
603  175   FE_RESET_R/77             $334=     16?24                ?678                	;0
604  175   FE_FETCH_R/78             #335=     $334                 16?25               	;678	>>678	<<677
605  175   ASSIGN/38                 ?285      16?3                 #335                	;0
606  176   INIT_FCALL_BY_NAME/59     ?0        ?0                   446:'json_decode'   	;2
607  176   FETCH_DIM_FUNC_ARG/93     $337=     16?25                448:'category_id'   	;1
608  176   SEND_VAR_EX/66            ?80       $337                 ?1                  	;0
609  176   SEND_VAL_EX/116           ?96       449:true             ?2                  	;0
610  176   DO_FCALL_BY_NAME/131      $338=     ?0                   ?0                  	;0
611  176   FE_RESET_R/77             $339=     $338                 ?676                	;0
612  176   FE_FETCH_R/78             ?0        $339                 16?26               	;676	>>676	<<675
613  177   NOP/0                     ?0        ?0                   ?0                  	;1
614  177   NOP/0                     ?0        ?0                   ?0                  	;1
615  177   GOTO/253                  ?0        ?619                 ?450                	;0
616  181   NOP/0                     ?0        ?0                   ?0                  	;1
617  181   NOP/0                     ?0        ?0                   ?0                  	;1
618  181   GOTO/253                  ?0        ?675                 ?451                	;0
619  183   BOOL_NOT/13               #340=     16?19                ?0                  	;0
620  183   JMPNZ_EX/47               #340=     #340                 ?623                	;0	>>623
621  183   IS_EQUAL/17               #341=     16?19                16?26               	;0
622  183   BOOL/52                   #340=     #341                 ?0                  	;0
623  183   BOOL_NOT/13               #342=     #340                 ?0                  	;0	<<620
624  183   JMPZ/43                   ?0        #342                 ?628                	;0	>>628
625  184   NOP/0                     ?0        ?0                   ?0                  	;1
626  184   NOP/0                     ?0        ?0                   ?0                  	;1
627  184   GOTO/253                  ?0        ?665                 ?452                	;0
628  186   INIT_METHOD_CALL/112      ?0        16?12                453:'addChild'      	;1	<<624
629  186   SEND_VAL_EX/116           ?80       455:'channel'        ?1                  	;0
630  186   DO_FCALL/60               $343=     ?0                   ?0                  	;0
631  186   ASSIGN/38                 ?293      16?8                 $343                	;0
632  187   INIT_METHOD_CALL/112      ?0        16?8                 456:'addChild'      	;2
633  187   SEND_VAL_EX/116           ?80       458:'title'          ?1                  	;0
634  187   INIT_FCALL_BY_NAME/59     ?0        ?0                   459:'base64_encode' 	;1
635  187   FETCH_DIM_FUNC_ARG/93     $345=     16?25                461:'title'         	;1
636  187   SEND_VAR_EX/66            ?80       $345                 ?1                  	;0
637  187   DO_FCALL_BY_NAME/131      $346=     ?0                   ?0                  	;0
638  187   SEND_VAR_NO_REF_EX/50     ?96       $346                 ?2                  	;0
639  187   DO_FCALL/60               ?296      ?0                   ?0                  	;0
640  188   INIT_METHOD_CALL/112      ?0        16?8                 462:'addChild'      	;2
641  188   SEND_VAL_EX/116           ?80       464:'description'    ?1                  	;0
642  188   SEND_VAL_EX/116           ?96       465:''               ?2                  	;0
643  188   DO_FCALL/60               ?297      ?0                   ?0                  	;0
644  189   INIT_METHOD_CALL/112      ?0        16?8                 466:'addChild'      	;2
645  189   SEND_VAL_EX/116           ?80       468:'category_id'    ?1                  	;0
646  189   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
647  189   DO_FCALL/60               ?298      ?0                   ?0                  	;0
648  190   NOP/0                     ?0        ?0                   ?0                  	;1
649  190   NOP/0                     ?0        ?0                   ?0                  	;1
650  190   GOTO/253                  ?0        ?651                 ?469                	;0
651  192   INIT_METHOD_CALL/112      ?0        16?8                 470:'addChild'      	;1
652  192   SEND_VAL_EX/116           ?80       472:'playlist_url'   ?1                  	;0
653  192   DO_FCALL/60               $350=     ?0                   ?0                  	;0
654  192   ASSIGN/38                 ?300      16?13                $350                	;0
655  193   INIT_METHOD_CALL/112      ?0        16?13                473:'addCData'      	;1
656  193   ROPE_INIT/54              #353=     ?0                   475:'enigma2?username='	;5
657  193   ROPE_ADD/55               #353=     #353                 16?16               	;1
658  193   ROPE_ADD/55               #353=     #353                 476:'&password='    	;2
659  193   ROPE_ADD/55               #353=     #353                 16?17               	;3
660  193   ROPE_END/56               #352=     #353                 477:'&type=get_seasons&series_id='	;4
661  193   CONCAT/8                  #356=     16?15                #352                	;0
662  193   CONCAT/8                  #357=     #356                 16?3                	;0
663  193   SEND_VAL_EX/116           ?80       #357                 ?1                  	;0
664  193   DO_FCALL/60               ?307      ?0                   ?0                  	;0
665  195   JMPZ/43                   ?0        16?19                ?669                	;0	>>669
666  196   NOP/0                     ?0        ?0                   ?0                  	;1
667  196   NOP/0                     ?0        ?0                   ?0                  	;1
668  196   GOTO/253                  ?0        ?616                 ?478                	;0
669  198   FE_FREE/127               ?0        $339                 ?21                 	;1	<<665
670  198   NOP/0                     ?0        ?0                   ?0                  	;1
671  198   GOTO/253                  ?0        ?677                 ?479                	;0
672  199   NOP/0                     ?0        ?0                   ?0                  	;1
673  199   NOP/0                     ?0        ?0                   ?0                  	;1
674  199   GOTO/253                  ?0        ?616                 ?480                	;0
675  200   JMP/42                    ?0        ?612                 ?0                  	;0	>>612
676  200   FE_FREE/127               ?0        $339                 ?0                  	;0	<<611
677  203   JMP/42                    ?0        ?604                 ?0                  	;0	>>604
678  203   FE_FREE/127               ?0        $334                 ?0                  	;0	<<603
679  207   INIT_FCALL_BY_NAME/59     ?0        ?0                   481:'header'        	;1
680  207   SEND_VAL_EX/116           ?80       483:'Content-Type: application/xml; charset=utf-8' ?1                  	;0
681  207   DO_FCALL_BY_NAME/131      ?308      ?0                   ?0                  	;0
682  208   INIT_METHOD_CALL/112      ?0        16?12                484:'asXML'         	;0
683  208   DO_FCALL/60               $360=     ?0                   ?0                  	;0
684  208   ECHO/40                   ?0        $360                 ?0                  	;0
685  209   GOTO/253                  ?0        ?686                 ?486                	;0
686  212   GOTO/253                  ?0        ?1667                ?487                	;0
687  213   GOTO/253                  ?0        ?709                 ?488                	;0
688  215   GOTO/253                  ?0        ?703                 ?489                	;0
689  217   INIT_METHOD_CALL/112      ?0        16?5                 490:'query'         	;1
690  217   INIT_FCALL_BY_NAME/59     ?0        ?0                   492:'implode'       	;2
691  217   SEND_VAL_EX/116           ?80       494:','              ?1                  	;0
692  217   INIT_FCALL_BY_NAME/59     ?0        ?0                   495:'array_map'     	;2
693  217   SEND_VAL_EX/116           ?80       497:'intval'         ?1                  	;0
694  217   FETCH_DIM_FUNC_ARG/93     $361=     16?7                 498:'series_ids'    	;2
695  217   SEND_VAR_EX/66            ?96       $361                 ?2                  	;0
696  217   DO_FCALL_BY_NAME/131      $362=     ?0                   ?0                  	;0
697  217   SEND_VAR_NO_REF_EX/50     ?96       $362                 ?2                  	;0
698  217   DO_FCALL_BY_NAME/131      $363=     ?0                   ?0                  	;0
699  217   CONCAT/8                  #364=     499:'SELECT * FROM `streams_series` WHERE `id` IN (' $363                	;0
700  217   CONCAT/8                  #365=     #364                 500:') ORDER BY `last_modified` DESC;'	;0
701  217   SEND_VAL_EX/116           ?80       #365                 ?1                  	;0
702  217   DO_FCALL/60               ?315      ?0                   ?0                  	;0
703  219   INIT_METHOD_CALL/112      ?0        16?5                 501:'get_rows'      	;2
704  219   SEND_VAL_EX/116           ?80       503:true             ?1                  	;0
705  219   SEND_VAL_EX/116           ?96       504:'id'             ?2                  	;0
706  219   DO_FCALL/60               $367=     ?0                   ?0                  	;0
707  219   ASSIGN/38                 ?317      16?24                $367                	;0
708  220   GOTO/253                  ?0        ?603                 ?505                	;0
709  223   GOTO/253                  ?0        ?712                 ?506                	;0	<<120
710  226   GOTO/253                  ?0        ?1667                ?507                	;0
711  227   GOTO/253                  ?0        ?814                 ?508                	;0
712  229   ISSET_ISEMPTY_CV/197      #369=     16?3                 ?0                  	;33554432
713  229   BOOL_NOT/13               #370=     #369                 ?0                  	;0
714  229   JMPZ/43                   ?0        #370                 ?716                	;0	>>716
715  230   GOTO/253                  ?0        ?710                 ?509                	;0
716  232   INIT_METHOD_CALL/112      ?0        16?5                 510:'query'         	;2	<<714
717  232   SEND_VAL_EX/116           ?80       512:'SELECT * FROM `streams_series` WHERE `id` = ?' ?1                  	;0
718  232   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
719  232   DO_FCALL/60               ?320      ?0                   ?0                  	;0
720  233   INIT_METHOD_CALL/112      ?0        16?5                 513:'get_row'       	;0
721  233   DO_FCALL/60               $372=     ?0                   ?0                  	;0
722  233   ASSIGN/38                 ?322      16?25                $372                	;0
723  234   FETCH_DIM_R/81            $374=     16?25                515:'title'         	;0
724  234   ASSIGN/38                 ?324      16?23                $374                	;0
725  235   NEW/68                    $376=     516:'SimpleXMLExtended' ?96                 	;1
726  235   SEND_VAL_EX/116           ?80       518:'<items/>'       ?1                  	;0
727  235   DO_FCALL/60               ?326      ?8                   ?0                  	;0
728  235   ASSIGN/38                 ?327      16?12                $376                	;0
729  236   GOTO/253                  ?0        ?787                 ?519                	;0
730  238   INIT_METHOD_CALL/112      ?0        16?5                 520:'get_rows'      	;3
731  238   SEND_VAL_EX/116           ?80       522:true             ?1                  	;0
732  238   SEND_VAL_EX/116           ?96       523:'season_num'     ?2                  	;0
733  238   SEND_VAL_EX/116           ?112      524:false            ?3                  	;0
734  238   DO_FCALL/60               $379=     ?0                   ?0                  	;0
735  238   ASSIGN/38                 ?329      16?27                $379                	;0
736  239   INIT_FCALL_BY_NAME/59     ?0        ?0                   525:'array_keys'    	;1
737  239   SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
738  239   DO_FCALL_BY_NAME/131      $381=     ?0                   ?0                  	;0
739  239   FE_RESET_R/77             $382=     $381                 ?779                	;0
740  239   FE_FETCH_R/78             ?0        $382                 16?28               	;779	>>779	<<778
741  240   INIT_METHOD_CALL/112      ?0        16?12                527:'addChild'      	;1
742  240   SEND_VAL_EX/116           ?80       529:'channel'        ?1                  	;0
743  240   DO_FCALL/60               $383=     ?0                   ?0                  	;0
744  240   ASSIGN/38                 ?333      16?8                 $383                	;0
745  241   INIT_METHOD_CALL/112      ?0        16?8                 530:'addChild'      	;2
746  241   SEND_VAL_EX/116           ?80       532:'title'          ?1                  	;0
747  241   INIT_FCALL_BY_NAME/59     ?0        ?0                   533:'base64_encode' 	;1
748  241   NOP/0                     ?0        ?0                   ?0                  	;0
749  241   FAST_CONCAT/53            #385=     535:'Season '        16?28               	;0
750  241   SEND_VAL_EX/116           ?80       #385                 ?1                  	;0
751  241   DO_FCALL_BY_NAME/131      $386=     ?0                   ?0                  	;0
752  241   SEND_VAR_NO_REF_EX/50     ?96       $386                 ?2                  	;0
753  241   DO_FCALL/60               ?336      ?0                   ?0                  	;0
754  242   INIT_METHOD_CALL/112      ?0        16?8                 536:'addChild'      	;2
755  242   SEND_VAL_EX/116           ?80       538:'description'    ?1                  	;0
756  242   SEND_VAL_EX/116           ?96       539:''               ?2                  	;0
757  242   DO_FCALL/60               ?337      ?0                   ?0                  	;0
758  243   INIT_METHOD_CALL/112      ?0        16?8                 540:'addChild'      	;2
759  243   SEND_VAL_EX/116           ?80       542:'category_id'    ?1                  	;0
760  243   SEND_VAR_EX/66            ?96       16?28                ?2                  	;0
761  243   DO_FCALL/60               ?338      ?0                   ?0                  	;0
762  244   INIT_METHOD_CALL/112      ?0        16?8                 543:'addChild'      	;1
763  244   SEND_VAL_EX/116           ?80       545:'playlist_url'   ?1                  	;0
764  244   DO_FCALL/60               $390=     ?0                   ?0                  	;0
765  244   ASSIGN/38                 ?340      16?13                $390                	;0
766  245   INIT_METHOD_CALL/112      ?0        16?13                546:'addCData'      	;1
767  245   ROPE_INIT/54              #393=     ?0                   548:'enigma2?username='	;5
768  245   ROPE_ADD/55               #393=     #393                 16?16               	;1
769  245   ROPE_ADD/55               #393=     #393                 549:'&password='    	;2
770  245   ROPE_ADD/55               #393=     #393                 16?17               	;3
771  245   ROPE_END/56               #392=     #393                 550:'&type=get_series_streams&series_id='	;4
772  245   CONCAT/8                  #396=     16?15                #392                	;0
773  245   CONCAT/8                  #397=     #396                 16?3                	;0
774  245   CONCAT/8                  #398=     #397                 551:'&season='      	;0
775  245   CONCAT/8                  #399=     #398                 16?28               	;0
776  245   SEND_VAL_EX/116           ?80       #399                 ?1                  	;0
777  245   DO_FCALL/60               ?349      ?0                   ?0                  	;0
778  246   JMP/42                    ?0        ?740                 ?0                  	;0	>>740
779  246   FE_FREE/127               ?0        $382                 ?0                  	;0	<<739
780  249   INIT_FCALL_BY_NAME/59     ?0        ?0                   552:'header'        	;1
781  249   SEND_VAL_EX/116           ?80       554:'Content-Type: application/xml; charset=utf-8' ?1                  	;0
782  249   DO_FCALL_BY_NAME/131      ?350      ?0                   ?0                  	;0
783  250   INIT_METHOD_CALL/112      ?0        16?12                555:'asXML'         	;0
784  250   DO_FCALL/60               $402=     ?0                   ?0                  	;0
785  250   ECHO/40                   ?0        $402                 ?0                  	;0
786  251   GOTO/253                  ?0        ?710                 ?557                	;0
787  253   INIT_METHOD_CALL/112      ?0        16?12                558:'addChild'      	;2
788  253   SEND_VAL_EX/116           ?80       560:'playlist_name'  ?1                  	;0
789  253   ROPE_INIT/54              #404=     ?0                   561:'TV Series [ '  	;3
790  253   ROPE_ADD/55               #404=     #404                 16?23               	;1
791  253   ROPE_END/56               #403=     #404                 562:' ]'            	;2
792  253   SEND_VAL_EX/116           ?96       #403                 ?2                  	;0
793  253   DO_FCALL/60               ?355      ?0                   ?0                  	;0
794  254   INIT_METHOD_CALL/112      ?0        16?12                563:'addChild'      	;1
795  254   SEND_VAL_EX/116           ?80       565:'category'       ?1                  	;0
796  254   DO_FCALL/60               $407=     ?0                   ?0                  	;0
797  254   ASSIGN/38                 ?357      16?14                $407                	;0
798  255   INIT_METHOD_CALL/112      ?0        16?14                566:'addChild'      	;2
799  255   SEND_VAL_EX/116           ?80       568:'category_id'    ?1                  	;0
800  255   SEND_VAL_EX/116           ?96       569:1                ?2                  	;0
801  255   DO_FCALL/60               ?358      ?0                   ?0                  	;0
802  256   INIT_METHOD_CALL/112      ?0        16?14                570:'addChild'      	;2
803  256   SEND_VAL_EX/116           ?80       572:'category_title' ?1                  	;0
804  256   ROPE_INIT/54              #411=     ?0                   573:'TV Series [ '  	;3
805  256   ROPE_ADD/55               #411=     #411                 16?23               	;1
806  256   ROPE_END/56               #410=     #411                 574:' ]'            	;2
807  256   SEND_VAL_EX/116           ?96       #410                 ?2                  	;0
808  256   DO_FCALL/60               ?362      ?0                   ?0                  	;0
809  257   INIT_METHOD_CALL/112      ?0        16?5                 575:'query'         	;2
810  257   SEND_VAL_EX/116           ?80       577:'SELECT * FROM `streams_episodes` t1 INNER JOIN `streams` t2 ON t2.id=t1.stream_id WHERE t1.series_id = ? ORDER BY t1.season_num ASC, t1.episode_num ASC' ?1                  	;0
811  257   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
812  257   DO_FCALL/60               ?363      ?0                   ?0                  	;0
813  258   GOTO/253                  ?0        ?730                 ?578                	;0
814  261   GOTO/253                  ?0        ?815                 ?579                	;0	<<122
815  263   ISSET_ISEMPTY_CV/197      #415=     16?3                 ?0                  	;33554432
816  263   JMPZ_EX/46                #415=     #415                 ?819                	;0	>>819
817  263   ISSET_ISEMPTY_CV/197      #416=     16?4                 ?0                  	;33554432
818  263   BOOL/52                   #415=     #416                 ?0                  	;0
819  263   BOOL_NOT/13               #417=     #415                 ?0                  	;0	<<816
820  263   JMPZ/43                   ?0        #417                 ?822                	;0	>>822
821  264   GOTO/253                  ?0        ?871                 ?580                	;0
822  266   INIT_METHOD_CALL/112      ?0        16?5                 581:'query'         	;2	<<820
823  266   SEND_VAL_EX/116           ?80       583:'SELECT * FROM `streams_series` WHERE `id` = ?' ?1                  	;0
824  266   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
825  266   DO_FCALL/60               ?367      ?0                   ?0                  	;0
826  267   INIT_METHOD_CALL/112      ?0        16?5                 584:'get_row'       	;0
827  267   DO_FCALL/60               $419=     ?0                   ?0                  	;0
828  267   ASSIGN/38                 ?369      16?25                $419                	;0
829  268   NEW/68                    $421=     586:'SimpleXMLExtended' ?96                 	;1
830  268   SEND_VAL_EX/116           ?80       588:'<items/>'       ?1                  	;0
831  268   DO_FCALL/60               ?371      ?8                   ?0                  	;0
832  268   ASSIGN/38                 ?372      16?12                $421                	;0
833  269   INIT_METHOD_CALL/112      ?0        16?12                589:'addChild'      	;2
834  269   SEND_VAL_EX/116           ?80       591:'playlist_name'  ?1                  	;0
835  269   FETCH_DIM_R/81            $424=     16?25                592:'title'         	;0
836  269   ROPE_INIT/54              #426=     ?0                   593:'TV Series [ '  	;5
837  269   ROPE_ADD/55               #426=     #426                 $424                	;1
838  269   ROPE_ADD/55               #426=     #426                 594:' Season '      	;2
839  269   ROPE_ADD/55               #426=     #426                 16?4                	;3
840  269   ROPE_END/56               #425=     #426                 595:' ]'            	;4
841  269   SEND_VAL_EX/116           ?96       #425                 ?2                  	;0
842  269   DO_FCALL/60               ?378      ?0                   ?0                  	;0
843  270   GOTO/253                  ?0        ?844                 ?596                	;0
844  272   INIT_METHOD_CALL/112      ?0        16?12                597:'addChild'      	;1
845  272   SEND_VAL_EX/116           ?80       599:'category'       ?1                  	;0
846  272   DO_FCALL/60               $430=     ?0                   ?0                  	;0
847  272   ASSIGN/38                 ?380      16?14                $430                	;0
848  273   INIT_METHOD_CALL/112      ?0        16?14                600:'addChild'      	;2
849  273   SEND_VAL_EX/116           ?80       602:'category_id'    ?1                  	;0
850  273   SEND_VAL_EX/116           ?96       603:1                ?2                  	;0
851  273   DO_FCALL/60               ?381      ?0                   ?0                  	;0
852  274   INIT_METHOD_CALL/112      ?0        16?14                604:'addChild'      	;2
853  274   SEND_VAL_EX/116           ?80       606:'category_title' ?1                  	;0
854  274   FETCH_DIM_R/81            $433=     16?25                607:'title'         	;0
855  274   ROPE_INIT/54              #435=     ?0                   608:'TV Series [ '  	;5
856  274   ROPE_ADD/55               #435=     #435                 $433                	;1
857  274   ROPE_ADD/55               #435=     #435                 609:' Season '      	;2
858  274   ROPE_ADD/55               #435=     #435                 16?4                	;3
859  274   ROPE_END/56               #434=     #435                 610:' ]'            	;4
860  274   SEND_VAL_EX/116           ?96       #434                 ?2                  	;0
861  274   DO_FCALL/60               ?387      ?0                   ?0                  	;0
862  275   INIT_METHOD_CALL/112      ?0        16?5                 611:'query'         	;3
863  275   SEND_VAL_EX/116           ?80       613:'SELECT t2.direct_source,t2.stream_source,t2.target_container,t2.id,t1.series_id,t1.season_num FROM `streams_episodes` t1 INNER JOIN `streams` t2 ON t2.id=t1.stream_id WHERE t1.series_id = ? AND t1.season_num = ? ORDER BY  t1.episode_num ASC' ?1                  	;0
864  275   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
865  275   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
866  275   DO_FCALL/60               ?388      ?0                   ?0                  	;0
867  276   INIT_METHOD_CALL/112      ?0        16?5                 614:'get_rows'      	;0
868  276   DO_FCALL/60               $440=     ?0                   ?0                  	;0
869  276   ASSIGN/38                 ?390      16?29                $440                	;0
870  277   GOTO/253                  ?0        ?873                 ?616                	;0
871  280   GOTO/253                  ?0        ?1667                ?617                	;0
872  281   GOTO/253                  ?0        ?964                 ?618                	;0
873  283   ASSIGN/38                 ?391      16?30                619:0               	;0
874  284   FE_RESET_R/77             $443=     16?29                ?956                	;0
875  284   FE_FETCH_R/78             ?0        $443                 16?31               	;956	>>956	<<955
876  285   NOP/0                     ?0        ?0                   ?0                  	;1
877  285   GOTO/253                  ?0        ?878                 ?620                	;0
878  287   INIT_METHOD_CALL/112      ?0        16?12                621:'addChild'      	;1
879  287   SEND_VAL_EX/116           ?80       623:'channel'        ?1                  	;0
880  287   DO_FCALL/60               $444=     ?0                   ?0                  	;0
881  287   ASSIGN/38                 ?394      16?8                 $444                	;0
882  288   INIT_METHOD_CALL/112      ?0        16?8                 624:'addChild'      	;2
883  288   SEND_VAL_EX/116           ?80       626:'title'          ?1                  	;0
884  288   INIT_FCALL_BY_NAME/59     ?0        ?0                   627:'base64_encode' 	;1
885  288   INIT_FCALL_BY_NAME/59     ?0        ?0                   629:'sprintf'       	;2
886  288   SEND_VAL_EX/116           ?80       631:'%02d'           ?1                  	;0
887  288   PRE_INC/34                $446=     16?30                ?0                  	;0
888  288   SEND_VAR_NO_REF_EX/50     ?96       $446                 ?2                  	;0
889  288   DO_FCALL_BY_NAME/131      $447=     ?0                   ?0                  	;0
890  288   CONCAT/8                  #448=     632:'Episode '       $447                	;0
891  288   SEND_VAL_EX/116           ?80       #448                 ?1                  	;0
892  288   DO_FCALL_BY_NAME/131      $449=     ?0                   ?0                  	;0
893  288   SEND_VAR_NO_REF_EX/50     ?96       $449                 ?2                  	;0
894  288   DO_FCALL/60               ?399      ?0                   ?0                  	;0
895  289   ASSIGN/38                 ?400      16?32                633:''              	;0
896  290   INIT_METHOD_CALL/112      ?0        16?8                 634:'addChild'      	;1
897  290   SEND_VAL_EX/116           ?80       636:'desc_image'     ?1                  	;0
898  290   DO_FCALL/60               $452=     ?0                   ?0                  	;0
899  290   ASSIGN/38                 ?402      16?33                $452                	;0
900  291   INIT_METHOD_CALL/112      ?0        16?33                637:'addCData'      	;1
901  291   INIT_STATIC_METHOD_CALL/113 ?0        639:'XUI'            641:'fcA722697178454b'	;1
902  291   FETCH_DIM_FUNC_ARG/93     $454=     16?25                643:'cover'         	;1
903  291   SEND_VAR_EX/66            ?80       $454                 ?1                  	;0
904  291   DO_FCALL/60               $455=     ?0                   ?0                  	;0
905  291   SEND_VAR_NO_REF_EX/50     ?80       $455                 ?1                  	;0
906  291   DO_FCALL/60               ?405      ?0                   ?0                  	;0
907  292   NOP/0                     ?0        ?0                   ?0                  	;1
908  292   GOTO/253                  ?0        ?909                 ?644                	;0
909  294   INIT_METHOD_CALL/112      ?0        16?8                 645:'addChild'      	;2
910  294   SEND_VAL_EX/116           ?80       647:'description'    ?1                  	;0
911  294   INIT_FCALL_BY_NAME/59     ?0        ?0                   648:'base64_encode' 	;1
912  294   SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
913  294   DO_FCALL_BY_NAME/131      $457=     ?0                   ?0                  	;0
914  294   SEND_VAR_NO_REF_EX/50     ?96       $457                 ?2                  	;0
915  294   DO_FCALL/60               ?407      ?0                   ?0                  	;0
916  295   INIT_METHOD_CALL/112      ?0        16?8                 650:'addChild'      	;2
917  295   SEND_VAL_EX/116           ?80       652:'category_id'    ?1                  	;0
918  295   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
919  295   DO_FCALL/60               ?408      ?0                   ?0                  	;0
920  296   INIT_METHOD_CALL/112      ?0        16?8                 653:'addChild'      	;1
921  296   SEND_VAL_EX/116           ?80       655:'stream_url'     ?1                  	;0
922  296   DO_FCALL/60               $460=     ?0                   ?0                  	;0
923  296   ASSIGN/38                 ?410      16?34                $460                	;0
924  297   ROPE_INIT/54              #465=     ?0                   656:'movie/'        	;8
925  297   ROPE_ADD/55               #465=     #465                 16?16               	;1
926  297   ROPE_ADD/55               #465=     #465                 657:'/'             	;2
927  297   ROPE_ADD/55               #465=     #465                 16?17               	;3
928  297   FETCH_DIM_R/81            $462=     16?31                658:'id'            	;0
929  297   ROPE_ADD/55               #465=     #465                 659:'/'             	;4
930  297   ROPE_ADD/55               #465=     #465                 $462                	;5
931  297   FETCH_DIM_R/81            $463=     16?31                660:'target_container'	;0
932  297   ROPE_ADD/55               #465=     #465                 661:'/'             	;6
933  297   ROPE_END/56               #464=     #465                 $463                	;7
934  297   ASSIGN/38                 ?418      16?35                #464                	;0
935  298   INIT_STATIC_METHOD_CALL/113 ?0        662:'Xui\\Functions' 664:'encrypt'       	;3
936  298   SEND_VAR_EX/66            ?80       16?35                ?1                  	;0
937  298   FETCH_STATIC_PROP_FUNC_ARG/177 $470=     666:'rSettings'      667:'XUI'           	;2
938  298   FETCH_DIM_FUNC_ARG/93     $471=     $470                 669:'live_streaming_pass'	;2
939  298   SEND_VAR_EX/66            ?96       $471                 ?2                  	;0
940  298   FETCH_CONSTANT/99         #472=     ?0                   670:'OPENSSL_EXTRA' 	;16
941  298   SEND_VAL_EX/116           ?112      #472                 ?3                  	;0
942  298   DO_FCALL/60               $473=     ?0                   ?0                  	;0
943  298   ASSIGN/38                 ?423      16?36                $473                	;0
944  299   NOP/0                     ?0        ?0                   ?0                  	;1
945  299   GOTO/253                  ?0        ?946                 ?673                	;0
946  301   NOP/0                     ?0        ?0                   ?0                  	;0
947  301   FAST_CONCAT/53            #475=     674:'play/'          16?36               	;0
948  301   CONCAT/8                  #476=     16?15                #475                	;0
949  301   ASSIGN/38                 ?426      16?37                #476                	;0
950  302   INIT_METHOD_CALL/112      ?0        16?34                675:'addCData'      	;1
951  302   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
952  302   DO_FCALL/60               ?427      ?0                   ?0                  	;0
953  304   NOP/0                     ?0        ?0                   ?0                  	;1
954  304   GOTO/253                  ?0        ?955                 ?677                	;0
955  305   JMP/42                    ?0        ?875                 ?0                  	;0	>>875
956  305   FE_FREE/127               ?0        $443                 ?0                  	;0	<<874
957  308   INIT_FCALL_BY_NAME/59     ?0        ?0                   678:'header'        	;1
958  308   SEND_VAL_EX/116           ?80       680:'Content-Type: application/xml; charset=utf-8' ?1                  	;0
959  308   DO_FCALL_BY_NAME/131      ?428      ?0                   ?0                  	;0
960  309   INIT_METHOD_CALL/112      ?0        16?12                681:'asXML'         	;0
961  309   DO_FCALL/60               $480=     ?0                   ?0                  	;0
962  309   ECHO/40                   ?0        $480                 ?0                  	;0
963  310   GOTO/253                  ?0        ?871                 ?683                	;0
964  313   GOTO/253                  ?0        ?1253                ?684                	;0	<<124
965  315   INIT_METHOD_CALL/112      ?0        16?12                685:'asXML'         	;0
966  315   DO_FCALL/60               $481=     ?0                   ?0                  	;0
967  315   ECHO/40                   ?0        $481                 ?0                  	;0
968  317   GOTO/253                  ?0        ?1667                ?687                	;0
969  318   GOTO/253                  ?0        ?1287                ?688                	;0
970  320   INIT_METHOD_CALL/112      ?0        16?14                689:'addChild'      	;2
971  320   SEND_VAL_EX/116           ?80       691:'category_id'    ?1                  	;0
972  320   SEND_VAL_EX/116           ?96       692:1                ?2                  	;0
973  320   DO_FCALL/60               ?431      ?0                   ?0                  	;0
974  321   INIT_METHOD_CALL/112      ?0        16?14                693:'addChild'      	;2
975  321   SEND_VAL_EX/116           ?80       695:'category_title' ?1                  	;0
976  321   FETCH_STATIC_PROP_R/173   $483=     696:'rSettings'      697:'XUI'           	;0
977  321   FETCH_DIM_R/81            $484=     $483                 699:'server_name'   	;0
978  321   CONCAT/8                  #485=     700:'Live [ '        $484                	;0
979  321   CONCAT/8                  #486=     #485                 701:' ]'            	;0
980  321   SEND_VAL_EX/116           ?96       #486                 ?2                  	;0
981  321   DO_FCALL/60               ?436      ?0                   ?0                  	;0
982  322   FE_RESET_R/77             $488=     16?10                ?1248               	;0
983  322   FE_FETCH_R/78             ?0        $488                 16?38               	;1248	>>1248	<<1247
984  323   NOP/0                     ?0        ?0                   ?0                  	;1
985  323   GOTO/253                  ?0        ?986                 ?702                	;0
986  325   BOOL_NOT/13               #489=     16?19                ?0                  	;0
987  325   JMPNZ_EX/47               #489=     #489                 ?998                	;0	>>998
988  325   INIT_FCALL_BY_NAME/59     ?0        ?0                   703:'in_array'      	;2
989  325   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
990  325   INIT_FCALL_BY_NAME/59     ?0        ?0                   705:'json_decode'   	;2
991  325   FETCH_DIM_FUNC_ARG/93     $490=     16?38                707:'category_id'   	;1
992  325   SEND_VAR_EX/66            ?80       $490                 ?1                  	;0
993  325   SEND_VAL_EX/116           ?96       708:true             ?2                  	;0
994  325   DO_FCALL_BY_NAME/131      $491=     ?0                   ?0                  	;0
995  325   SEND_VAR_NO_REF_EX/50     ?96       $491                 ?2                  	;0
996  325   DO_FCALL_BY_NAME/131      $492=     ?0                   ?0                  	;0
997  325   BOOL/52                   #489=     $492                 ?0                  	;0
998  325   BOOL_NOT/13               #493=     #489                 ?0                  	;0	<<987
999  325   JMPZ/43                   ?0        #493                 ?1002               	;0	>>1002
1000 326   NOP/0                     ?0        ?0                   ?0                  	;1
1001 326   GOTO/253                  ?0        ?1078                ?709                	;0
1002 328   ASSIGN/38                 ?443      16?39                710:array (
)       	;0	<<999
1003 329   FETCH_STATIC_PROP_R/173   $495=     711:'rCached'        712:'XUI'           	;0
1004 329   JMPZ/43                   ?0        $495                 ?1007               	;0	>>1007
1005 330   NOP/0                     ?0        ?0                   ?0                  	;1
1006 330   GOTO/253                  ?0        ?1191                ?714                	;0
1007 332   INIT_METHOD_CALL/112      ?0        16?5                 715:'query'         	;4	<<1004
1008 332   SEND_VAL_EX/116           ?80       717:'SELECT * FROM `epg_data` WHERE `epg_id` = ? AND `channel_id` = ? AND `end` >= ? LIMIT 2' ?1                  	;0
1009 332   FETCH_DIM_FUNC_ARG/93     $496=     16?38                718:'epg_id'        	;2
1010 332   SEND_VAR_EX/66            ?96       $496                 ?2                  	;0
1011 332   FETCH_DIM_FUNC_ARG/93     $497=     16?38                719:'channel_id'    	;3
1012 332   SEND_VAR_EX/66            ?112      $497                 ?3                  	;0
1013 332   INIT_FCALL_BY_NAME/59     ?0        ?0                   720:'time'          	;0
1014 332   DO_FCALL_BY_NAME/131      $498=     ?0                   ?0                  	;0
1015 332   SEND_VAR_NO_REF_EX/50     ?128      $498                 ?4                  	;0
1016 332   DO_FCALL/60               ?448      ?0                   ?0                  	;0
1017 333   INIT_METHOD_CALL/112      ?0        16?5                 722:'get_rows'      	;0
1018 333   DO_FCALL/60               $500=     ?0                   ?0                  	;0
1019 333   ASSIGN/38                 ?450      16?39                $500                	;0
1020 334   NOP/0                     ?0        ?0                   ?0                  	;1
1021 334   GOTO/253                  ?0        ?1189                ?724                	;0
1022 337   NOP/0                     ?0        ?0                   ?0                  	;1
1023 337   GOTO/253                  ?0        ?1247                ?725                	;0
1024 339   FE_RESET_R/77             $502=     16?39                ?1077               	;0
1025 339   FE_FETCH_R/78             ?0        $502                 16?40               	;1077	>>1077	<<1076
1026 340   INIT_FCALL_BY_NAME/59     ?0        ?0                   726:'date'          	;2
1027 340   SEND_VAL_EX/116           ?80       728:'H:i'            ?1                  	;0
1028 340   FETCH_DIM_FUNC_ARG/93     $503=     16?40                729:'start'         	;2
1029 340   SEND_VAR_EX/66            ?96       $503                 ?2                  	;0
1030 340   DO_FCALL_BY_NAME/131      $504=     ?0                   ?0                  	;0
1031 340   CONCAT/8                  #505=     730:'['              $504                	;0
1032 340   CONCAT/8                  #506=     #505                 731:'] '            	;0
1033 340   FETCH_DIM_R/81            $507=     16?40                732:'title'         	;0
1034 340   CONCAT/8                  #508=     #506                 $507                	;0
1035 340   CONCAT/8                  #509=     #508                 733:'
( '           	;0
1036 340   FETCH_DIM_R/81            $510=     16?40                734:'description'   	;0
1037 340   CONCAT/8                  #511=     #509                 $510                	;0
1038 340   CONCAT/8                  #512=     #511                 735:')
'            	;0
1039 340   ASSIGN_CONCAT/30          ?462      16?32                #512                	;0
1040 341   IS_EQUAL/17               #514=     16?41                736:0               	;0
1041 341   BOOL_NOT/13               #515=     #514                 ?0                  	;0
1042 341   JMPZ/43                   ?0        #515                 ?1046               	;0	>>1046
1043 342   NOP/0                     ?0        ?0                   ?0                  	;1
1044 342   NOP/0                     ?0        ?0                   ?0                  	;1
1045 342   GOTO/253                  ?0        ?1076                ?737                	;0
1046 344   INIT_FCALL_BY_NAME/59     ?0        ?0                   738:'date'          	;2	<<1042
1047 344   SEND_VAL_EX/116           ?80       740:'H:i'            ?1                  	;0
1048 344   FETCH_DIM_FUNC_ARG/93     $516=     16?40                741:'start'         	;2
1049 344   SEND_VAR_EX/66            ?96       $516                 ?2                  	;0
1050 344   DO_FCALL_BY_NAME/131      $517=     ?0                   ?0                  	;0
1051 344   CONCAT/8                  #518=     742:'['              $517                	;0
1052 344   CONCAT/8                  #519=     #518                 743:' - '           	;0
1053 344   INIT_FCALL_BY_NAME/59     ?0        ?0                   744:'date'          	;2
1054 344   SEND_VAL_EX/116           ?80       746:'H:i'            ?1                  	;0
1055 344   FETCH_DIM_FUNC_ARG/93     $520=     16?40                747:'end'           	;2
1056 344   SEND_VAR_EX/66            ?96       $520                 ?2                  	;0
1057 344   DO_FCALL_BY_NAME/131      $521=     ?0                   ?0                  	;0
1058 344   CONCAT/8                  #522=     #519                 $521                	;0
1059 344   CONCAT/8                  #523=     #522                 748:'] + '          	;0
1060 344   INIT_FCALL_BY_NAME/59     ?0        ?0                   749:'round'         	;2
1061 344   FETCH_DIM_R/81            $524=     16?40                751:'end'           	;0
1062 344   INIT_FCALL_BY_NAME/59     ?0        ?0                   752:'time'          	;0
1063 344   DO_FCALL_BY_NAME/131      $525=     ?0                   ?0                  	;0
1064 344   SUB/2                     #526=     $524                 $525                	;0
1065 344   DIV/4                     #527=     #526                 754:60              	;0
1066 344   SEND_VAL_EX/116           ?80       #527                 ?1                  	;0
1067 344   SEND_VAL_EX/116           ?96       755:1                ?2                  	;0
1068 344   DO_FCALL_BY_NAME/131      $528=     ?0                   ?0                  	;0
1069 344   CONCAT/8                  #529=     #523                 $528                	;0
1070 344   CONCAT/8                  #530=     #529                 756:' min   '       	;0
1071 344   FETCH_DIM_R/81            $531=     16?40                757:'title'         	;0
1072 344   CONCAT/8                  #532=     #530                 $531                	;0
1073 344   ASSIGN/38                 ?482      16?42                #532                	;0
1074 345   POST_INC/36               #534=     16?41                ?0                  	;0
1075 345   FREE/70                   ?0        #534                 ?0                  	;0
1076 347   JMP/42                    ?0        ?1025                ?0                  	;0	>>1025
1077 347   FE_FREE/127               ?0        $502                 ?0                  	;0	<<1024
1078 351   INIT_FCALL_BY_NAME/59     ?0        ?0                   758:'json_decode'   	;2
1079 351   FETCH_DIM_FUNC_ARG/93     $535=     16?38                760:'category_id'   	;1
1080 351   SEND_VAR_EX/66            ?80       $535                 ?1                  	;0
1081 351   SEND_VAL_EX/116           ?96       761:true             ?2                  	;0
1082 351   DO_FCALL_BY_NAME/131      $536=     ?0                   ?0                  	;0
1083 351   FE_RESET_R/77             $537=     $536                 ?1181               	;0
1084 351   FE_FETCH_R/78             ?0        $537                 16?26               	;1181	>>1181	<<1180
1085 352   NOP/0                     ?0        ?0                   ?0                  	;1
1086 352   NOP/0                     ?0        ?0                   ?0                  	;1
1087 352   GOTO/253                  ?0        ?1123                ?762                	;0
1088 354   INIT_METHOD_CALL/112      ?0        16?33                763:'addCData'      	;1
1089 354   INIT_STATIC_METHOD_CALL/113 ?0        765:'XUI'            767:'fca722697178454B'	;1
1090 354   FETCH_DIM_FUNC_ARG/93     $538=     16?38                769:'stream_icon'   	;1
1091 354   SEND_VAR_EX/66            ?80       $538                 ?1                  	;0
1092 354   DO_FCALL/60               $539=     ?0                   ?0                  	;0
1093 354   SEND_VAR_NO_REF_EX/50     ?80       $539                 ?1                  	;0
1094 354   DO_FCALL/60               ?489      ?0                   ?0                  	;0
1095 355   INIT_METHOD_CALL/112      ?0        16?8                 770:'addChild'      	;2
1096 355   SEND_VAL_EX/116           ?80       772:'category_id'    ?1                  	;0
1097 355   SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
1098 355   DO_FCALL/60               ?490      ?0                   ?0                  	;0
1099 356   INIT_METHOD_CALL/112      ?0        16?8                 773:'addChild'      	;1
1100 356   SEND_VAL_EX/116           ?80       775:'stream_url'     ?1                  	;0
1101 356   DO_FCALL/60               $542=     ?0                   ?0                  	;0
1102 356   ASSIGN/38                 ?492      16?13                $542                	;0
1103 357   ROPE_INIT/54              #546=     ?0                   776:'live/'         	;6
1104 357   ROPE_ADD/55               #546=     #546                 16?16               	;1
1105 357   ROPE_ADD/55               #546=     #546                 777:'/'             	;2
1106 357   ROPE_ADD/55               #546=     #546                 16?17               	;3
1107 357   FETCH_DIM_R/81            $544=     16?38                778:'id'            	;0
1108 357   ROPE_ADD/55               #546=     #546                 779:'/'             	;4
1109 357   ROPE_END/56               #545=     #546                 $544                	;5
1110 357   ASSIGN/38                 ?498      16?35                #545                	;0
1111 358   INIT_STATIC_METHOD_CALL/113 ?0        780:'Xui\\Functions' 782:'encrypt'       	;3
1112 358   SEND_VAR_EX/66            ?80       16?35                ?1                  	;0
1113 358   FETCH_STATIC_PROP_FUNC_ARG/177 $550=     784:'rSettings'      785:'XUI'           	;2
1114 358   FETCH_DIM_FUNC_ARG/93     $551=     $550                 787:'live_streaming_pass'	;2
1115 358   SEND_VAR_EX/66            ?96       $551                 ?2                  	;0
1116 358   FETCH_CONSTANT/99         #552=     ?0                   788:'OPENSSL_EXTRA' 	;16
1117 358   SEND_VAL_EX/116           ?112      #552                 ?3                  	;0
1118 358   DO_FCALL/60               $553=     ?0                   ?0                  	;0
1119 358   ASSIGN/38                 ?503      16?36                $553                	;0
1120 359   NOP/0                     ?0        ?0                   ?0                  	;1
1121 359   NOP/0                     ?0        ?0                   ?0                  	;1
1122 359   GOTO/253                  ?0        ?1163                ?791                	;0
1123 361   BOOL_NOT/13               #555=     16?19                ?0                  	;0
1124 361   JMPNZ_EX/47               #555=     #555                 ?1127               	;0	>>1127
1125 361   IS_EQUAL/17               #556=     16?19                16?26               	;0
1126 361   BOOL/52                   #555=     #556                 ?0                  	;0
1127 361   BOOL_NOT/13               #557=     #555                 ?0                  	;0	<<1124
1128 361   JMPZ/43                   ?0        #557                 ?1132               	;0	>>1132
1129 362   NOP/0                     ?0        ?0                   ?0                  	;1
1130 362   NOP/0                     ?0        ?0                   ?0                  	;1
1131 362   GOTO/253                  ?0        ?1170                ?792                	;0
1132 364   INIT_METHOD_CALL/112      ?0        16?12                793:'addChild'      	;1	<<1128
1133 364   SEND_VAL_EX/116           ?80       795:'channel'        ?1                  	;0
1134 364   DO_FCALL/60               $558=     ?0                   ?0                  	;0
1135 364   ASSIGN/38                 ?508      16?8                 $558                	;0
1136 365   INIT_METHOD_CALL/112      ?0        16?8                 796:'addChild'      	;2
1137 365   SEND_VAL_EX/116           ?80       798:'title'          ?1                  	;0
1138 365   INIT_FCALL_BY_NAME/59     ?0        ?0                   799:'base64_encode' 	;1
1139 365   FETCH_DIM_R/81            $560=     16?38                801:'stream_display_name'	;0
1140 365   CONCAT/8                  #561=     $560                 802:' '             	;0
1141 365   CONCAT/8                  #562=     #561                 16?42               	;0
1142 365   SEND_VAL_EX/116           ?80       #562                 ?1                  	;0
1143 365   DO_FCALL_BY_NAME/131      $563=     ?0                   ?0                  	;0
1144 365   SEND_VAR_NO_REF_EX/50     ?96       $563                 ?2                  	;0
1145 365   DO_FCALL/60               ?513      ?0                   ?0                  	;0
1146 366   INIT_METHOD_CALL/112      ?0        16?8                 803:'addChild'      	;2
1147 366   SEND_VAL_EX/116           ?80       805:'description'    ?1                  	;0
1148 366   INIT_FCALL_BY_NAME/59     ?0        ?0                   806:'base64_encode' 	;1
1149 366   SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
1150 366   DO_FCALL_BY_NAME/131      $565=     ?0                   ?0                  	;0
1151 366   SEND_VAR_NO_REF_EX/50     ?96       $565                 ?2                  	;0
1152 366   DO_FCALL/60               ?515      ?0                   ?0                  	;0
1153 367   INIT_METHOD_CALL/112      ?0        16?8                 808:'addChild'      	;1
1154 367   SEND_VAL_EX/116           ?80       810:'desc_image'     ?1                  	;0
1155 367   DO_FCALL/60               $567=     ?0                   ?0                  	;0
1156 367   ASSIGN/38                 ?517      16?33                $567                	;0
1157 368   NOP/0                     ?0        ?0                   ?0                  	;1
1158 368   NOP/0                     ?0        ?0                   ?0                  	;1
1159 368   GOTO/253                  ?0        ?1088                ?811                	;0
1160 372   NOP/0                     ?0        ?0                   ?0                  	;1
1161 372   NOP/0                     ?0        ?0                   ?0                  	;1
1162 372   GOTO/253                  ?0        ?1180                ?812                	;0
1163 374   NOP/0                     ?0        ?0                   ?0                  	;0
1164 374   FAST_CONCAT/53            #569=     813:'play/'          16?36               	;0
1165 374   CONCAT/8                  #570=     16?15                #569                	;0
1166 374   ASSIGN/38                 ?520      16?37                #570                	;0
1167 375   INIT_METHOD_CALL/112      ?0        16?13                814:'addCData'      	;1
1168 375   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
1169 375   DO_FCALL/60               ?521      ?0                   ?0                  	;0
1170 377   JMPZ/43                   ?0        16?19                ?1174               	;0	>>1174
1171 378   NOP/0                     ?0        ?0                   ?0                  	;1
1172 378   NOP/0                     ?0        ?0                   ?0                  	;1
1173 378   GOTO/253                  ?0        ?1160                ?816                	;0
1174 380   FE_FREE/127               ?0        $537                 ?39                 	;1	<<1170
1175 380   NOP/0                     ?0        ?0                   ?0                  	;1
1176 380   GOTO/253                  ?0        ?1182                ?817                	;0
1177 381   NOP/0                     ?0        ?0                   ?0                  	;1
1178 381   NOP/0                     ?0        ?0                   ?0                  	;1
1179 381   GOTO/253                  ?0        ?1160                ?818                	;0
1180 382   JMP/42                    ?0        ?1084                ?0                  	;0	>>1084
1181 382   FE_FREE/127               ?0        $537                 ?0                  	;0	<<1083
1182 385   NOP/0                     ?0        ?0                   ?0                  	;1
1183 385   GOTO/253                  ?0        ?1022                ?819                	;0
1184 389   ASSIGN/38                 ?522      16?32                820:''              	;0
1185 390   ASSIGN/38                 ?523      16?42                821:''              	;0
1186 391   ASSIGN/38                 ?524      16?41                822:0               	;0
1187 392   NOP/0                     ?0        ?0                   ?0                  	;1
1188 392   GOTO/253                  ?0        ?1024                ?823                	;0
1189 394   NOP/0                     ?0        ?0                   ?0                  	;1
1190 394   GOTO/253                  ?0        ?1184                ?824                	;0
1191 396   INIT_FCALL_BY_NAME/59     ?0        ?0                   825:'file_exists'   	;1
1192 396   FETCH_CONSTANT/99         #576=     ?0                   827:'EPG_PATH'      	;16
1193 396   CONCAT/8                  #577=     #576                 830:'stream_'       	;0
1194 396   INIT_FCALL_BY_NAME/59     ?0        ?0                   831:'intval'        	;1
1195 396   FETCH_DIM_FUNC_ARG/93     $578=     16?38                833:'id'            	;1
1196 396   SEND_VAR_EX/66            ?80       $578                 ?1                  	;0
1197 396   DO_FCALL_BY_NAME/131      $579=     ?0                   ?0                  	;0
1198 396   CONCAT/8                  #580=     #577                 $579                	;0
1199 396   SEND_VAL_EX/116           ?80       #580                 ?1                  	;0
1200 396   DO_FCALL_BY_NAME/131      $581=     ?0                   ?0                  	;0
1201 396   BOOL_NOT/13               #582=     $581                 ?0                  	;0
1202 396   JMPZ/43                   ?0        #582                 ?1205               	;0	>>1205
1203 397   NOP/0                     ?0        ?0                   ?0                  	;1
1204 397   GOTO/253                  ?0        ?1184                ?834                	;0
1205 399   INIT_FCALL_BY_NAME/59     ?0        ?0                   835:'igbinary_unserialize'	;1	<<1202
1206 399   INIT_FCALL_BY_NAME/59     ?0        ?0                   837:'file_get_contents'	;1
1207 399   FETCH_CONSTANT/99         #583=     ?0                   839:'EPG_PATH'      	;16
1208 399   CONCAT/8                  #584=     #583                 842:'stream_'       	;0
1209 399   FETCH_DIM_R/81            $585=     16?38                843:'id'            	;0
1210 399   CONCAT/8                  #586=     #584                 $585                	;0
1211 399   SEND_VAL_EX/116           ?80       #586                 ?1                  	;0
1212 399   DO_FCALL_BY_NAME/131      $587=     ?0                   ?0                  	;0
1213 399   SEND_VAR_NO_REF_EX/50     ?80       $587                 ?1                  	;0
1214 399   DO_FCALL_BY_NAME/131      $588=     ?0                   ?0                  	;0
1215 399   FE_RESET_R/77             $589=     $588                 ?1244               	;0
1216 399   FE_FETCH_R/78             ?0        $589                 16?40               	;1244	>>1244	<<1243
1217 400   FETCH_DIM_R/81            $590=     16?40                844:'end'           	;0
1218 400   INIT_FCALL_BY_NAME/59     ?0        ?0                   845:'time'          	;0
1219 400   DO_FCALL_BY_NAME/131      $591=     ?0                   ?0                  	;0
1220 400   IS_SMALLER/19             #592=     $590                 $591                	;0
1221 400   BOOL_NOT/13               #593=     #592                 ?0                  	;0
1222 400   JMPZ/43                   ?0        #593                 ?1226               	;0	>>1226
1223 401   NOP/0                     ?0        ?0                   ?0                  	;1
1224 401   NOP/0                     ?0        ?0                   ?0                  	;1
1225 401   GOTO/253                  ?0        ?1229                ?847                	;0
1226 403   NOP/0                     ?0        ?0                   ?0                  	;1	<<1222
1227 403   NOP/0                     ?0        ?0                   ?0                  	;1
1228 403   GOTO/253                  ?0        ?1243                ?848                	;0
1229 405   ASSIGN_DIM/147            ?543      16?39                ?4397406            	;0
1230 405   OP_DATA/137               ?0        16?40                ?0                  	;0
1231 406   INIT_FCALL_BY_NAME/59     ?0        ?0                   849:'count'         	;1
1232 406   SEND_VAR_EX/66            ?80       16?39                ?1                  	;0
1233 406   DO_FCALL_BY_NAME/131      $595=     ?0                   ?0                  	;0
1234 406   IS_SMALLER_OR_EQUAL/20    #596=     851:2                $595                	;0
1235 406   BOOL_NOT/13               #597=     #596                 ?0                  	;0
1236 406   JMPZ/43                   ?0        #597                 ?1240               	;0	>>1240
1237 407   NOP/0                     ?0        ?0                   ?0                  	;1
1238 407   NOP/0                     ?0        ?0                   ?0                  	;1
1239 407   GOTO/253                  ?0        ?1243                ?852                	;0
1240 409   FE_FREE/127               ?0        $589                 ?43                 	;1	<<1236
1241 409   NOP/0                     ?0        ?0                   ?0                  	;1
1242 409   GOTO/253                  ?0        ?1245                ?853                	;0
1243 411   JMP/42                    ?0        ?1216                ?0                  	;0	>>1216
1244 411   FE_FREE/127               ?0        $589                 ?0                  	;0	<<1215
1245 414   NOP/0                     ?0        ?0                   ?0                  	;1
1246 414   GOTO/253                  ?0        ?1184                ?854                	;0
1247 415   JMP/42                    ?0        ?983                 ?0                  	;0	>>983
1248 415   FE_FREE/127               ?0        $488                 ?0                  	;0	<<982
1249 418   INIT_FCALL_BY_NAME/59     ?0        ?0                   855:'header'        	;1
1250 418   SEND_VAL_EX/116           ?80       857:'Content-Type: application/xml; charset=utf-8' ?1                  	;0
1251 418   DO_FCALL_BY_NAME/131      ?547      ?0                   ?0                  	;0
1252 419   GOTO/253                  ?0        ?965                 ?858                	;0
1253 421   ISSET_ISEMPTY_CV/197      #599=     16?1                 ?0                  	;33554432
1254 421   JMPNZ_EX/47               #599=     #599                 ?1259               	;0	>>1259
1255 421   INIT_FCALL_BY_NAME/59     ?0        ?0                   859:'is_null'       	;1
1256 421   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1257 421   DO_FCALL_BY_NAME/131      $600=     ?0                   ?0                  	;0
1258 421   BOOL/52                   #599=     $600                 ?0                  	;0
1259 421   BOOL_NOT/13               #601=     #599                 ?0                  	;0	<<1254
1260 421   JMPZ/43                   ?0        #601                 ?1262               	;0	>>1262
1261 422   GOTO/253                  ?0        ?968                 ?861                	;0
1262 424   INIT_FCALL_BY_NAME/59     ?0        ?0                   862:'is_null'       	;1	<<1260
1263 424   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1264 424   DO_FCALL_BY_NAME/131      $602=     ?0                   ?0                  	;0
1265 424   JMPZ/43                   ?0        $602                 ?1268               	;0	>>1268
1266 424   QM_ASSIGN/22              #603=     864:NULL             ?0                  	;0
1267 424   JMP/42                    ?0        ?1269                ?0                  	;0	>>1269
1268 424   QM_ASSIGN/22              #603=     16?1                 ?0                  	;0	<<1265
1269 424   ASSIGN/38                 ?553      16?19                #603                	;0	<<1267
1270 425   NEW/68                    $605=     865:'SimpleXMLExtended' ?96                 	;1
1271 425   SEND_VAL_EX/116           ?80       867:'<items/>'       ?1                  	;0
1272 425   DO_FCALL/60               ?555      ?8                   ?0                  	;0
1273 425   ASSIGN/38                 ?556      16?12                $605                	;0
1274 426   INIT_METHOD_CALL/112      ?0        16?12                868:'addChild'      	;2
1275 426   SEND_VAL_EX/116           ?80       870:'playlist_name'  ?1                  	;0
1276 426   FETCH_STATIC_PROP_R/173   $608=     871:'rSettings'      872:'XUI'           	;0
1277 426   FETCH_DIM_R/81            $609=     $608                 874:'server_name'   	;0
1278 426   CONCAT/8                  #610=     875:'Live [ '        $609                	;0
1279 426   CONCAT/8                  #611=     #610                 876:' ]'            	;0
1280 426   SEND_VAL_EX/116           ?96       #611                 ?2                  	;0
1281 426   DO_FCALL/60               ?561      ?0                   ?0                  	;0
1282 427   INIT_METHOD_CALL/112      ?0        16?12                877:'addChild'      	;1
1283 427   SEND_VAL_EX/116           ?80       879:'category'       ?1                  	;0
1284 427   DO_FCALL/60               $613=     ?0                   ?0                  	;0
1285 427   ASSIGN/38                 ?563      16?14                $613                	;0
1286 428   GOTO/253                  ?0        ?970                 ?880                	;0
1287 431   GOTO/253                  ?0        ?1456                ?881                	;0	<<126
1288 433   INIT_METHOD_CALL/112      ?0        16?14                882:'addChild'      	;2
1289 433   SEND_VAL_EX/116           ?80       884:'category_id'    ?1                  	;0
1290 433   SEND_VAL_EX/116           ?96       885:1                ?2                  	;0
1291 433   DO_FCALL/60               ?564      ?0                   ?0                  	;0
1292 434   INIT_METHOD_CALL/112      ?0        16?14                886:'addChild'      	;2
1293 434   SEND_VAL_EX/116           ?80       888:'category_title' ?1                  	;0
1294 434   FETCH_STATIC_PROP_R/173   $616=     889:'rSettings'      890:'XUI'           	;0
1295 434   FETCH_DIM_R/81            $617=     $616                 892:'server_name'   	;0
1296 434   CONCAT/8                  #618=     893:'Movie [ '       $617                	;0
1297 434   CONCAT/8                  #619=     #618                 894:' ]'            	;0
1298 434   SEND_VAL_EX/116           ?96       #619                 ?2                  	;0
1299 434   DO_FCALL/60               ?569      ?0                   ?0                  	;0
1300 435   FE_RESET_R/77             $621=     16?11                ?1446               	;0
1301 435   FE_FETCH_R/78             ?0        $621                 16?38               	;1446	>>1446	<<1445
1302 436   INIT_FCALL_BY_NAME/59     ?0        ?0                   895:'json_decode'   	;2
1303 436   FETCH_DIM_FUNC_ARG/93     $622=     16?38                897:'category_id'   	;1
1304 436   SEND_VAR_EX/66            ?80       $622                 ?1                  	;0
1305 436   SEND_VAL_EX/116           ?96       898:true             ?2                  	;0
1306 436   DO_FCALL_BY_NAME/131      $623=     ?0                   ?0                  	;0
1307 436   FE_RESET_R/77             $624=     $623                 ?1444               	;0
1308 436   FE_FETCH_R/78             ?0        $624                 16?26               	;1444	>>1444	<<1443
1309 437   NOP/0                     ?0        ?0                   ?0                  	;1
1310 437   NOP/0                     ?0        ?0                   ?0                  	;1
1311 437   GOTO/253                  ?0        ?1412                ?899                	;0
1312 439   BOOL_NOT/13               #625=     16?43                ?0                  	;0
1313 439   JMPZ/43                   ?0        #625                 ?1317               	;0	>>1317
1314 440   NOP/0                     ?0        ?0                   ?0                  	;1
1315 440   NOP/0                     ?0        ?0                   ?0                  	;1
1316 440   GOTO/253                  ?0        ?1340                ?900                	;0
1317 442   FE_RESET_R/77             $626=     16?43                ?1339               	;0	<<1313
1318 442   FE_FETCH_R/78             #627=     $626                 16?44               	;1339	>>1339	<<1338
1319 442   ASSIGN/38                 ?577      16?45                #627                	;0
1320 443   IS_EQUAL/17               #629=     16?45                901:'movie_image'   	;0
1321 443   BOOL_NOT/13               #630=     #629                 ?0                  	;0
1322 443   JMPZ/43                   ?0        #630                 ?1327               	;0	>>1327
1323 444   NOP/0                     ?0        ?0                   ?0                  	;1
1324 444   NOP/0                     ?0        ?0                   ?0                  	;1
1325 444   NOP/0                     ?0        ?0                   ?0                  	;1
1326 444   GOTO/253                  ?0        ?1331                ?902                	;0
1327 446   NOP/0                     ?0        ?0                   ?0                  	;1	<<1322
1328 446   NOP/0                     ?0        ?0                   ?0                  	;1
1329 446   NOP/0                     ?0        ?0                   ?0                  	;1
1330 446   GOTO/253                  ?0        ?1338                ?903                	;0
1331 448   INIT_FCALL_BY_NAME/59     ?0        ?0                   904:'strtoupper'    	;1
1332 448   SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
1333 448   DO_FCALL_BY_NAME/131      $631=     ?0                   ?0                  	;0
1334 448   CONCAT/8                  #632=     $631                 906:': '            	;0
1335 448   CONCAT/8                  #633=     #632                 16?44               	;0
1336 448   CONCAT/8                  #634=     #633                 907:'
'             	;0
1337 448   ASSIGN_CONCAT/30          ?584      16?32                #634                	;0
1338 449   JMP/42                    ?0        ?1318                ?0                  	;0	>>1318
1339 449   FE_FREE/127               ?0        $626                 ?0                  	;0	<<1317
1340 453   INIT_METHOD_CALL/112      ?0        16?8                 908:'addChild'      	;1
1341 453   SEND_VAL_EX/116           ?80       910:'desc_image'     ?1                  	;0
1342 453   DO_FCALL/60               $636=     ?0                   ?0                  	;0
1343 453   ASSIGN/38                 ?586      16?33                $636                	;0
1344 454   NOP/0                     ?0        ?0                   ?0                  	;1
1345 454   NOP/0                     ?0        ?0                   ?0                  	;1
1346 454   GOTO/253                  ?0        ?1347                ?911                	;0
1347 456   INIT_METHOD_CALL/112      ?0        16?33                912:'addCData'      	;1
1348 456   INIT_STATIC_METHOD_CALL/113 ?0        914:'XUI'            916:'Fca722697178454B'	;1
1349 456   FETCH_DIM_FUNC_ARG/93     $638=     16?43                918:'movie_image'   	;1
1350 456   SEND_VAR_EX/66            ?80       $638                 ?1                  	;0
1351 456   DO_FCALL/60               $639=     ?0                   ?0                  	;0
1352 456   SEND_VAR_NO_REF_EX/50     ?80       $639                 ?1                  	;0
1353 456   DO_FCALL/60               ?589      ?0                   ?0                  	;0
1354 457   INIT_METHOD_CALL/112      ?0        16?8                 919:'addChild'      	;2
1355 457   SEND_VAL_EX/116           ?80       921:'description'    ?1                  	;0
1356 457   INIT_FCALL_BY_NAME/59     ?0        ?0                   922:'base64_encode' 	;1
1357 457   SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
1358 457   DO_FCALL_BY_NAME/131      $641=     ?0                   ?0                  	;0
1359 457   SEND_VAR_NO_REF_EX/50     ?96       $641                 ?2                  	;0
1360 457   DO_FCALL/60               ?591      ?0                   ?0                  	;0
1361 458   INIT_METHOD_CALL/112      ?0        16?8                 924:'addChild'      	;2
1362 458   SEND_VAL_EX/116           ?80       926:'category_id'    ?1                  	;0
1363 458   SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
1364 458   DO_FCALL/60               ?592      ?0                   ?0                  	;0
1365 459   INIT_METHOD_CALL/112      ?0        16?8                 927:'addChild'      	;1
1366 459   SEND_VAL_EX/116           ?80       929:'stream_url'     ?1                  	;0
1367 459   DO_FCALL/60               $644=     ?0                   ?0                  	;0
1368 459   ASSIGN/38                 ?594      16?34                $644                	;0
1369 460   ROPE_INIT/54              #649=     ?0                   930:'movie/'        	;8
1370 460   ROPE_ADD/55               #649=     #649                 16?16               	;1
1371 460   ROPE_ADD/55               #649=     #649                 931:'/'             	;2
1372 460   ROPE_ADD/55               #649=     #649                 16?17               	;3
1373 460   FETCH_DIM_R/81            $646=     16?38                932:'id'            	;0
1374 460   ROPE_ADD/55               #649=     #649                 933:'/'             	;4
1375 460   ROPE_ADD/55               #649=     #649                 $646                	;5
1376 460   FETCH_DIM_R/81            $647=     16?38                934:'target_container'	;0
1377 460   ROPE_ADD/55               #649=     #649                 935:'/'             	;6
1378 460   ROPE_END/56               #648=     #649                 $647                	;7
1379 460   ASSIGN/38                 ?602      16?35                #648                	;0
1380 461   NOP/0                     ?0        ?0                   ?0                  	;1
1381 461   NOP/0                     ?0        ?0                   ?0                  	;1
1382 461   GOTO/253                  ?0        ?1383                ?936                	;0
1383 463   INIT_STATIC_METHOD_CALL/113 ?0        937:'Xui\\Functions' 939:'encrypt'       	;3
1384 463   SEND_VAR_EX/66            ?80       16?35                ?1                  	;0
1385 463   FETCH_STATIC_PROP_FUNC_ARG/177 $654=     941:'rSettings'      942:'XUI'           	;2
1386 463   FETCH_DIM_FUNC_ARG/93     $655=     $654                 944:'live_streaming_pass'	;2
1387 463   SEND_VAR_EX/66            ?96       $655                 ?2                  	;0
1388 463   FETCH_CONSTANT/99         #656=     ?0                   945:'OPENSSL_EXTRA' 	;16
1389 463   SEND_VAL_EX/116           ?112      #656                 ?3                  	;0
1390 463   DO_FCALL/60               $657=     ?0                   ?0                  	;0
1391 463   ASSIGN/38                 ?607      16?36                $657                	;0
1392 464   NOP/0                     ?0        ?0                   ?0                  	;0
1393 464   FAST_CONCAT/53            #659=     948:'play/'          16?36               	;0
1394 464   CONCAT/8                  #660=     16?15                #659                	;0
1395 464   ASSIGN/38                 ?610      16?37                #660                	;0
1396 465   INIT_METHOD_CALL/112      ?0        16?34                949:'addCData'      	;1
1397 465   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
1398 465   DO_FCALL/60               ?611      ?0                   ?0                  	;0
1399 467   JMPZ/43                   ?0        16?19                ?1403               	;0	>>1403
1400 468   NOP/0                     ?0        ?0                   ?0                  	;1
1401 468   NOP/0                     ?0        ?0                   ?0                  	;1
1402 468   GOTO/253                  ?0        ?1409                ?951                	;0
1403 470   NOP/0                     ?0        ?0                   ?0                  	;1	<<1399
1404 470   NOP/0                     ?0        ?0                   ?0                  	;1
1405 470   GOTO/253                  ?0        ?1406                ?952                	;0
1406 472   FE_FREE/127               ?0        $624                 ?46                 	;1
1407 472   NOP/0                     ?0        ?0                   ?0                  	;1
1408 472   GOTO/253                  ?0        ?1445                ?953                	;0
1409 475   NOP/0                     ?0        ?0                   ?0                  	;1
1410 475   NOP/0                     ?0        ?0                   ?0                  	;1
1411 475   GOTO/253                  ?0        ?1443                ?954                	;0
1412 477   BOOL_NOT/13               #663=     16?19                ?0                  	;0
1413 477   JMPNZ_EX/47               #663=     #663                 ?1416               	;0	>>1416
1414 477   IS_EQUAL/17               #664=     16?19                16?26               	;0
1415 477   BOOL/52                   #663=     #664                 ?0                  	;0
1416 477   BOOL_NOT/13               #665=     #663                 ?0                  	;0	<<1413
1417 477   JMPZ/43                   ?0        #665                 ?1421               	;0	>>1421
1418 478   NOP/0                     ?0        ?0                   ?0                  	;1
1419 478   NOP/0                     ?0        ?0                   ?0                  	;1
1420 478   GOTO/253                  ?0        ?1399                ?955                	;0
1421 480   INIT_FCALL_BY_NAME/59     ?0        ?0                   956:'json_decode'   	;2	<<1417
1422 480   FETCH_DIM_FUNC_ARG/93     $666=     16?38                958:'movie_properties'	;1
1423 480   SEND_VAR_EX/66            ?80       $666                 ?1                  	;0
1424 480   SEND_VAL_EX/116           ?96       959:true             ?2                  	;0
1425 480   DO_FCALL_BY_NAME/131      $667=     ?0                   ?0                  	;0
1426 480   ASSIGN/38                 ?617      16?43                $667                	;0
1427 481   INIT_METHOD_CALL/112      ?0        16?12                960:'addChild'      	;1
1428 481   SEND_VAL_EX/116           ?80       962:'channel'        ?1                  	;0
1429 481   DO_FCALL/60               $669=     ?0                   ?0                  	;0
1430 481   ASSIGN/38                 ?619      16?8                 $669                	;0
1431 482   INIT_METHOD_CALL/112      ?0        16?8                 963:'addChild'      	;2
1432 482   SEND_VAL_EX/116           ?80       965:'title'          ?1                  	;0
1433 482   INIT_FCALL_BY_NAME/59     ?0        ?0                   966:'base64_encode' 	;1
1434 482   FETCH_DIM_FUNC_ARG/93     $671=     16?38                968:'stream_display_name'	;1
1435 482   SEND_VAR_EX/66            ?80       $671                 ?1                  	;0
1436 482   DO_FCALL_BY_NAME/131      $672=     ?0                   ?0                  	;0
1437 482   SEND_VAR_NO_REF_EX/50     ?96       $672                 ?2                  	;0
1438 482   DO_FCALL/60               ?622      ?0                   ?0                  	;0
1439 483   ASSIGN/38                 ?623      16?32                969:''              	;0
1440 484   NOP/0                     ?0        ?0                   ?0                  	;1
1441 484   NOP/0                     ?0        ?0                   ?0                  	;1
1442 484   GOTO/253                  ?0        ?1312                ?970                	;0
1443 485   JMP/42                    ?0        ?1308                ?0                  	;0	>>1308
1444 485   FE_FREE/127               ?0        $624                 ?0                  	;0	<<1307
1445 488   JMP/42                    ?0        ?1301                ?0                  	;0	>>1301
1446 488   FE_FREE/127               ?0        $621                 ?0                  	;0	<<1300
1447 491   INIT_FCALL_BY_NAME/59     ?0        ?0                   971:'header'        	;1
1448 491   SEND_VAL_EX/116           ?80       973:'Content-Type: application/xml; charset=utf-8' ?1                  	;0
1449 491   DO_FCALL_BY_NAME/131      ?624      ?0                   ?0                  	;0
1450 492   GOTO/253                  ?0        ?1451                ?974                	;0
1451 494   INIT_METHOD_CALL/112      ?0        16?12                975:'asXML'         	;0
1452 494   DO_FCALL/60               $676=     ?0                   ?0                  	;0
1453 494   ECHO/40                   ?0        $676                 ?0                  	;0
1454 496   GOTO/253                  ?0        ?1667                ?977                	;0
1455 497   GOTO/253                  ?0        ?1490                ?978                	;0
1456 499   ISSET_ISEMPTY_CV/197      #677=     16?1                 ?0                  	;33554432
1457 499   JMPNZ_EX/47               #677=     #677                 ?1462               	;0	>>1462
1458 499   INIT_FCALL_BY_NAME/59     ?0        ?0                   979:'is_null'       	;1
1459 499   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1460 499   DO_FCALL_BY_NAME/131      $678=     ?0                   ?0                  	;0
1461 499   BOOL/52                   #677=     $678                 ?0                  	;0
1462 499   BOOL_NOT/13               #679=     #677                 ?0                  	;0	<<1457
1463 499   JMPZ/43                   ?0        #679                 ?1465               	;0	>>1465
1464 500   GOTO/253                  ?0        ?1454                ?981                	;0
1465 502   INIT_FCALL_BY_NAME/59     ?0        ?0                   982:'is_null'       	;1	<<1463
1466 502   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1467 502   DO_FCALL_BY_NAME/131      $680=     ?0                   ?0                  	;0
1468 502   JMPZ/43                   ?0        $680                 ?1471               	;0	>>1471
1469 502   QM_ASSIGN/22              #681=     984:NULL             ?0                  	;0
1470 502   JMP/42                    ?0        ?1472                ?0                  	;0	>>1472
1471 502   QM_ASSIGN/22              #681=     16?1                 ?0                  	;0	<<1468
1472 502   ASSIGN/38                 ?631      16?19                #681                	;0	<<1470
1473 503   NEW/68                    $683=     985:'SimpleXMLExtended' ?96                 	;1
1474 503   SEND_VAL_EX/116           ?80       987:'<items/>'       ?1                  	;0
1475 503   DO_FCALL/60               ?633      ?8                   ?0                  	;0
1476 503   ASSIGN/38                 ?634      16?12                $683                	;0
1477 504   INIT_METHOD_CALL/112      ?0        16?12                988:'addChild'      	;2
1478 504   SEND_VAL_EX/116           ?80       990:'playlist_name'  ?1                  	;0
1479 504   FETCH_STATIC_PROP_R/173   $686=     991:'rSettings'      992:'XUI'           	;0
1480 504   FETCH_DIM_R/81            $687=     $686                 994:'server_name'   	;0
1481 504   CONCAT/8                  #688=     995:'Movie [ '       $687                	;0
1482 504   CONCAT/8                  #689=     #688                 996:' ]'            	;0
1483 504   SEND_VAL_EX/116           ?96       #689                 ?2                  	;0
1484 504   DO_FCALL/60               ?639      ?0                   ?0                  	;0
1485 505   INIT_METHOD_CALL/112      ?0        16?12                997:'addChild'      	;1
1486 505   SEND_VAL_EX/116           ?80       999:'category'       ?1                  	;0
1487 505   DO_FCALL/60               $691=     ?0                   ?0                  	;0
1488 505   ASSIGN/38                 ?641      16?14                $691                	;0
1489 506   GOTO/253                  ?0        ?1288                ?1000               	;0
1490 509   GOTO/253                  ?0        ?1614                ?1001               	;0	<<127
1491 511   INIT_METHOD_CALL/112      ?0        16?8                 1002:'addChild'     	;2
1492 511   SEND_VAL_EX/116           ?80       1004:'title'         ?1                  	;0
1493 511   INIT_FCALL_BY_NAME/59     ?0        ?0                   1005:'base64_encode'	;1
1494 511   SEND_VAL_EX/116           ?80       1007:'VOD'           ?1                  	;0
1495 511   DO_FCALL_BY_NAME/131      $693=     ?0                   ?0                  	;0
1496 511   SEND_VAR_NO_REF_EX/50     ?96       $693                 ?2                  	;0
1497 511   DO_FCALL/60               ?643      ?0                   ?0                  	;0
1498 512   INIT_METHOD_CALL/112      ?0        16?8                 1008:'addChild'     	;2
1499 512   SEND_VAL_EX/116           ?80       1010:'description'   ?1                  	;0
1500 512   INIT_FCALL_BY_NAME/59     ?0        ?0                   1011:'base64_encode'	;1
1501 512   SEND_VAL_EX/116           ?80       1013:'Video On Demand Category' ?1                  	;0
1502 512   DO_FCALL_BY_NAME/131      $695=     ?0                   ?0                  	;0
1503 512   SEND_VAR_NO_REF_EX/50     ?96       $695                 ?2                  	;0
1504 512   DO_FCALL/60               ?645      ?0                   ?0                  	;0
1505 513   INIT_METHOD_CALL/112      ?0        16?8                 1014:'addChild'     	;2
1506 513   SEND_VAL_EX/116           ?80       1016:'category_id'   ?1                  	;0
1507 513   SEND_VAL_EX/116           ?96       1017:1               ?2                  	;0
1508 513   DO_FCALL/60               ?646      ?0                   ?0                  	;0
1509 514   INIT_METHOD_CALL/112      ?0        16?8                 1018:'addChild'     	;1
1510 514   SEND_VAL_EX/116           ?80       1020:'playlist_url'  ?1                  	;0
1511 514   DO_FCALL/60               $698=     ?0                   ?0                  	;0
1512 514   ASSIGN/38                 ?648      16?13                $698                	;0
1513 515   INIT_METHOD_CALL/112      ?0        16?13                1021:'addCData'     	;1
1514 515   ROPE_INIT/54              #701=     ?0                   1023:'enigma2?username='	;5
1515 515   ROPE_ADD/55               #701=     #701                 16?16               	;1
1516 515   ROPE_ADD/55               #701=     #701                 1024:'&password='   	;2
1517 515   ROPE_ADD/55               #701=     #701                 16?17               	;3
1518 515   ROPE_END/56               #700=     #701                 1025:'&type=get_vod_categories'	;4
1519 515   CONCAT/8                  #704=     16?15                #700                	;0
1520 515   SEND_VAL_EX/116           ?80       #704                 ?1                  	;0
1521 515   DO_FCALL/60               ?654      ?0                   ?0                  	;0
1522 516   GOTO/253                  ?0        ?1591                ?1026               	;0
1523 518   INIT_METHOD_CALL/112      ?0        16?8                 1027:'addChild'     	;1
1524 518   SEND_VAL_EX/116           ?80       1029:'playlist_url'  ?1                  	;0
1525 518   DO_FCALL/60               $706=     ?0                   ?0                  	;0
1526 518   ASSIGN/38                 ?656      16?13                $706                	;0
1527 519   INIT_METHOD_CALL/112      ?0        16?13                1030:'addCData'     	;1
1528 519   ROPE_INIT/54              #709=     ?0                   1032:'enigma2?username='	;5
1529 519   ROPE_ADD/55               #709=     #709                 16?16               	;1
1530 519   ROPE_ADD/55               #709=     #709                 1033:'&password='   	;2
1531 519   ROPE_ADD/55               #709=     #709                 16?17               	;3
1532 519   ROPE_END/56               #708=     #709                 1034:'&type=get_series_categories'	;4
1533 519   CONCAT/8                  #712=     16?15                #708                	;0
1534 519   SEND_VAL_EX/116           ?80       #712                 ?1                  	;0
1535 519   DO_FCALL/60               ?662      ?0                   ?0                  	;0
1536 520   INIT_FCALL_BY_NAME/59     ?0        ?0                   1035:'header'       	;1
1537 520   SEND_VAL_EX/116           ?80       1037:'Content-Type: application/xml; charset=utf-8' ?1                  	;0
1538 520   DO_FCALL_BY_NAME/131      ?663      ?0                   ?0                  	;0
1539 521   INIT_METHOD_CALL/112      ?0        16?12                1038:'asXML'        	;0
1540 521   DO_FCALL/60               $715=     ?0                   ?0                  	;0
1541 521   ECHO/40                   ?0        $715                 ?0                  	;0
1542 522   GOTO/253                  ?0        ?1667                ?1040               	;0
1543 523   GOTO/253                  ?0        ?1639                ?1041               	;0
1544 525   INIT_METHOD_CALL/112      ?0        16?8                 1042:'addChild'     	;1
1545 525   SEND_VAL_EX/116           ?80       1044:'playlist_url'  ?1                  	;0
1546 525   DO_FCALL/60               $716=     ?0                   ?0                  	;0
1547 525   ASSIGN/38                 ?666      16?13                $716                	;0
1548 526   INIT_METHOD_CALL/112      ?0        16?13                1045:'addCData'     	;1
1549 526   ROPE_INIT/54              #719=     ?0                   1047:'enigma2?username='	;5
1550 526   ROPE_ADD/55               #719=     #719                 16?16               	;1
1551 526   ROPE_ADD/55               #719=     #719                 1048:'&password='   	;2
1552 526   ROPE_ADD/55               #719=     #719                 16?17               	;3
1553 526   ROPE_END/56               #718=     #719                 1049:'&type=get_live_categories'	;4
1554 526   CONCAT/8                  #722=     16?15                #718                	;0
1555 526   SEND_VAL_EX/116           ?80       #722                 ?1                  	;0
1556 526   DO_FCALL/60               ?672      ?0                   ?0                  	;0
1557 528   ISSET_ISEMPTY_CV/197      #724=     16?11                ?0                  	;16777216
1558 528   JMPZ/43                   ?0        #724                 ?1560               	;0	>>1560
1559 529   GOTO/253                  ?0        ?1591                ?1050               	;0
1560 531   INIT_METHOD_CALL/112      ?0        16?12                1051:'addChild'     	;1	<<1558
1561 531   SEND_VAL_EX/116           ?80       1053:'channel'       ?1                  	;0
1562 531   DO_FCALL/60               $725=     ?0                   ?0                  	;0
1563 531   ASSIGN/38                 ?675      16?8                 $725                	;0
1564 532   GOTO/253                  ?0        ?1491                ?1054               	;0
1565 534   ISSET_ISEMPTY_CV/197      #727=     16?10                ?0                  	;16777216
1566 534   JMPZ/43                   ?0        #727                 ?1568               	;0	>>1568
1567 535   GOTO/253                  ?0        ?1557                ?1055               	;0
1568 537   INIT_METHOD_CALL/112      ?0        16?12                1056:'addChild'     	;1	<<1566
1569 537   SEND_VAL_EX/116           ?80       1058:'channel'       ?1                  	;0
1570 537   DO_FCALL/60               $728=     ?0                   ?0                  	;0
1571 537   ASSIGN/38                 ?678      16?8                 $728                	;0
1572 538   INIT_METHOD_CALL/112      ?0        16?8                 1059:'addChild'     	;2
1573 538   SEND_VAL_EX/116           ?80       1061:'title'         ?1                  	;0
1574 538   INIT_FCALL_BY_NAME/59     ?0        ?0                   1062:'base64_encode'	;1
1575 538   SEND_VAL_EX/116           ?80       1064:'Live Streams'  ?1                  	;0
1576 538   DO_FCALL_BY_NAME/131      $730=     ?0                   ?0                  	;0
1577 538   SEND_VAR_NO_REF_EX/50     ?96       $730                 ?2                  	;0
1578 538   DO_FCALL/60               ?680      ?0                   ?0                  	;0
1579 539   INIT_METHOD_CALL/112      ?0        16?8                 1065:'addChild'     	;2
1580 539   SEND_VAL_EX/116           ?80       1067:'description'   ?1                  	;0
1581 539   INIT_FCALL_BY_NAME/59     ?0        ?0                   1068:'base64_encode'	;1
1582 539   SEND_VAL_EX/116           ?80       1070:'Live Streams Category' ?1                  	;0
1583 539   DO_FCALL_BY_NAME/131      $732=     ?0                   ?0                  	;0
1584 539   SEND_VAR_NO_REF_EX/50     ?96       $732                 ?2                  	;0
1585 539   DO_FCALL/60               ?682      ?0                   ?0                  	;0
1586 540   INIT_METHOD_CALL/112      ?0        16?8                 1071:'addChild'     	;2
1587 540   SEND_VAL_EX/116           ?80       1073:'category_id'   ?1                  	;0
1588 540   SEND_VAL_EX/116           ?96       1074:0               ?2                  	;0
1589 540   DO_FCALL/60               ?683      ?0                   ?0                  	;0
1590 541   GOTO/253                  ?0        ?1544                ?1075               	;0
1591 544   INIT_METHOD_CALL/112      ?0        16?12                1076:'addChild'     	;1
1592 544   SEND_VAL_EX/116           ?80       1078:'channel'       ?1                  	;0
1593 544   DO_FCALL/60               $735=     ?0                   ?0                  	;0
1594 544   ASSIGN/38                 ?685      16?8                 $735                	;0
1595 545   INIT_METHOD_CALL/112      ?0        16?8                 1079:'addChild'     	;2
1596 545   SEND_VAL_EX/116           ?80       1081:'title'         ?1                  	;0
1597 545   INIT_FCALL_BY_NAME/59     ?0        ?0                   1082:'base64_encode'	;1
1598 545   SEND_VAL_EX/116           ?80       1084:'TV Series'     ?1                  	;0
1599 545   DO_FCALL_BY_NAME/131      $737=     ?0                   ?0                  	;0
1600 545   SEND_VAR_NO_REF_EX/50     ?96       $737                 ?2                  	;0
1601 545   DO_FCALL/60               ?687      ?0                   ?0                  	;0
1602 546   INIT_METHOD_CALL/112      ?0        16?8                 1085:'addChild'     	;2
1603 546   SEND_VAL_EX/116           ?80       1087:'description'   ?1                  	;0
1604 546   INIT_FCALL_BY_NAME/59     ?0        ?0                   1088:'base64_encode'	;1
1605 546   SEND_VAL_EX/116           ?80       1090:'TV Series Category' ?1                  	;0
1606 546   DO_FCALL_BY_NAME/131      $739=     ?0                   ?0                  	;0
1607 546   SEND_VAR_NO_REF_EX/50     ?96       $739                 ?2                  	;0
1608 546   DO_FCALL/60               ?689      ?0                   ?0                  	;0
1609 547   INIT_METHOD_CALL/112      ?0        16?8                 1091:'addChild'     	;2
1610 547   SEND_VAL_EX/116           ?80       1093:'category_id'   ?1                  	;0
1611 547   SEND_VAL_EX/116           ?96       1094:2               ?2                  	;0
1612 547   DO_FCALL/60               ?690      ?0                   ?0                  	;0
1613 548   GOTO/253                  ?0        ?1523                ?1095               	;0
1614 550   NEW/68                    $742=     1096:'SimpleXMLExtended' ?96                 	;1
1615 550   SEND_VAL_EX/116           ?80       1098:'<items/>'      ?1                  	;0
1616 550   DO_FCALL/60               ?692      ?8                   ?0                  	;0
1617 550   ASSIGN/38                 ?693      16?12                $742                	;0
1618 551   INIT_METHOD_CALL/112      ?0        16?12                1099:'addChild'     	;2
1619 551   SEND_VAL_EX/116           ?80       1101:'playlist_name' ?1                  	;0
1620 551   FETCH_STATIC_PROP_FUNC_ARG/177 $745=     1102:'rSettings'     1103:'XUI'          	;2
1621 551   FETCH_DIM_FUNC_ARG/93     $746=     $745                 1105:'server_name'  	;2
1622 551   SEND_VAR_EX/66            ?96       $746                 ?2                  	;0
1623 551   DO_FCALL/60               ?696      ?0                   ?0                  	;0
1624 552   INIT_METHOD_CALL/112      ?0        16?12                1106:'addChild'     	;1
1625 552   SEND_VAL_EX/116           ?80       1108:'category'      ?1                  	;0
1626 552   DO_FCALL/60               $748=     ?0                   ?0                  	;0
1627 552   ASSIGN/38                 ?698      16?14                $748                	;0
1628 553   INIT_METHOD_CALL/112      ?0        16?14                1109:'addChild'     	;2
1629 553   SEND_VAL_EX/116           ?80       1111:'category_id'   ?1                  	;0
1630 553   SEND_VAL_EX/116           ?96       1112:1               ?2                  	;0
1631 553   DO_FCALL/60               ?699      ?0                   ?0                  	;0
1632 554   INIT_METHOD_CALL/112      ?0        16?14                1113:'addChild'     	;2
1633 554   SEND_VAL_EX/116           ?80       1115:'category_title' ?1                  	;0
1634 554   FETCH_STATIC_PROP_FUNC_ARG/177 $751=     1116:'rSettings'     1117:'XUI'          	;2
1635 554   FETCH_DIM_FUNC_ARG/93     $752=     $751                 1119:'server_name'  	;2
1636 554   SEND_VAR_EX/66            ?96       $752                 ?2                  	;0
1637 554   DO_FCALL/60               ?702      ?0                   ?0                  	;0
1638 555   GOTO/253                  ?0        ?1565                ?1120               	;0
1639 559   GOTO/253                  ?0        ?1667                ?1121               	;0
1640 561   INIT_STATIC_METHOD_CALL/113 ?0        1122:'XUI'           1124:'C721bD954A5f072F'	;1
1641 561   SEND_VAL_EX/116           ?80       1126:'live'          ?1                  	;0
1642 561   DO_FCALL/60               $754=     ?0                   ?0                  	;0
1643 561   ASSIGN/38                 ?704      16?18                $754                	;0
1644 562   INIT_STATIC_METHOD_CALL/113 ?0        1127:'XUI'           1129:'C721bd954a5F072F'	;1
1645 562   SEND_VAL_EX/116           ?80       1131:'movie'         ?1                  	;0
1646 562   DO_FCALL/60               $756=     ?0                   ?0                  	;0
1647 562   ASSIGN/38                 ?706      16?20                $756                	;0
1648 563   INIT_STATIC_METHOD_CALL/113 ?0        1132:'XUI'           1134:'C721BD954A5f072f'	;1
1649 563   SEND_VAL_EX/116           ?80       1136:'series'        ?1                  	;0
1650 563   DO_FCALL/60               $758=     ?0                   ?0                  	;0
1651 563   ASSIGN/38                 ?708      16?22                $758                	;0
1652 564   ASSIGN/38                 ?709      16?10                1137:array (
)      	;0
1653 565   ASSIGN/38                 ?710      16?11                1138:array (
)      	;0
1654 566   GOTO/253                  ?0        ?1752                ?1139               	;0
1655 568   INIT_FCALL_BY_NAME/59     ?0        ?0                   1140:'register_shutdown_function'	;1	<<0
1656 568   SEND_VAL_EX/116           ?80       1142:'shutdown'      ?1                  	;0
1657 568   DO_FCALL_BY_NAME/131      ?711      ?0                   ?0                  	;0
1658 569   INCLUDE_OR_EVAL/73        ?712      1143:'./init.php'    ?0                  	;8
1659 570   ASSIGN/38                 ?713      16?6                 1144:true           	;0
1660 571   FETCH_STATIC_PROP_R/173   $765=     1145:'rSettings'     1146:'XUI'          	;0
1661 571   FETCH_DIM_R/81            $766=     $765                 1148:'disable_enigma2'	;0
1662 571   BOOL_NOT/13               #767=     $766                 ?0                  	;0
1663 571   JMPZ/43                   ?0        #767                 ?1665               	;0	>>1665
1664 572   GOTO/253                  ?0        ?1671                ?1149               	;0
1665 574   ASSIGN/38                 ?717      16?6                 1150:false          	;0	<<1663
1666 575   GOTO/253                  ?0        ?1668                ?1151               	;0
1667 579   GOTO/253                  ?0        ?1806                ?1152               	;0
1668 581   INIT_FCALL_BY_NAME/59     ?0        ?0                   1153:'generateError'	;1
1669 581   SEND_VAL_EX/116           ?80       1155:'E2_DISABLED'   ?1                  	;0
1670 581   DO_FCALL_BY_NAME/131      ?718      ?0                   ?0                  	;0
1671 583   FETCH_CLASS/109           $770=     ?0                   1156:'SimpleXMLElement'	;0
1672 583   DECLARE_INHERITED_CLASS/140 $771=     1158:'simplexmlextended' $770                	;4294967295
1673 593   FETCH_STATIC_PROP_R/173   $772=     1160:'rRequest'      1161:'XUI'          	;0
1674 593   FETCH_DIM_R/81            $773=     $772                 1163:'username'     	;0
1675 593   ASSIGN/38                 ?723      16?16                $773                	;0
1676 594   FETCH_STATIC_PROP_R/173   $775=     1164:'rRequest'      1165:'XUI'          	;0
1677 594   FETCH_DIM_R/81            $776=     $775                 1167:'password'     	;0
1678 594   ASSIGN/38                 ?726      16?17                $776                	;0
1679 595   GOTO/253                  ?0        ?1                   ?1168               	;0
1680 597   INIT_FCALL_BY_NAME/59     ?0        ?0                   1169:'stripos'      	;2
1681 597   FETCH_FUNC_ARG/92         $778=     1171:'_SERVER'       ?0                  	;1
1682 597   FETCH_DIM_FUNC_ARG/93     $779=     $778                 1172:'SERVER_PROTOCOL'	;1
1683 597   SEND_VAR_EX/66            ?80       $779                 ?1                  	;0
1684 597   SEND_VAL_EX/116           ?96       1173:'https'         ?2                  	;0
1685 597   DO_FCALL_BY_NAME/131      $780=     ?0                   ?0                  	;0
1686 597   IS_IDENTICAL/15           #781=     $780                 1174:0              	;0
1687 597   JMPZ/43                   ?0        #781                 ?1690               	;0	>>1690
1688 597   QM_ASSIGN/22              #782=     1175:'https://'      ?0                  	;0
1689 597   JMP/42                    ?0        ?1691                ?0                  	;0	>>1691
1690 597   QM_ASSIGN/22              #782=     1176:'http://'       ?0                  	;0	<<1687
1691 597   ASSIGN/38                 ?732      16?46                #782                	;0	<<1689
1692 598   FETCH_IS/89               $784=     1177:'_SERVER'       ?0                  	;0
1693 598   ISSET_ISEMPTY_DIM_OBJ/115 #785=     $784                 1178:'HTTP_HOST'    	;16777216
1694 598   BOOL_NOT/13               #786=     #785                 ?0                  	;0
1695 598   JMPZ/43                   ?0        #786                 ?1702               	;0	>>1702
1696 598   FETCH_R/80                $787=     1179:'_SERVER'       ?0                  	;0
1697 598   FETCH_DIM_R/81            $788=     $787                 1180:'HTTP_HOST'    	;0
1698 598   CONCAT/8                  #789=     16?46                $788                	;0
1699 598   CONCAT/8                  #790=     #789                 1181:'/'            	;0
1700 598   QM_ASSIGN/22              #791=     #790                 ?0                  	;0
1701 598   JMP/42                    ?0        ?1707                ?0                  	;0	>>1707
1702 598   FETCH_CONSTANT/99         #793=     ?0                   1185:'SERVER_ID'    	;16	<<1695
1703 598   FETCH_STATIC_PROP_R/173   $792=     1182:'rServers'      1183:'XUI'          	;0
1704 598   FETCH_DIM_R/81            $794=     $792                 #793                	;0
1705 598   FETCH_DIM_R/81            $795=     $794                 1188:'site_url'     	;0
1706 598   QM_ASSIGN/22              #791=     $795                 ?0                  	;0
1707 598   ASSIGN/38                 ?745      16?15                #791                	;0	<<1701
1708 599   INIT_FCALL_BY_NAME/59     ?0        ?0                   1189:'ini_set'      	;2
1709 599   SEND_VAL_EX/116           ?80       1191:'memory_limit'  ?1                  	;0
1710 599   SEND_VAL_EX/116           ?96       1192:-1              ?2                  	;0
1711 599   DO_FCALL_BY_NAME/131      ?746      ?0                   ?0                  	;0
1712 600   ISSET_ISEMPTY_CV/197      #798=     16?16                ?0                  	;16777216
1713 600   JMPNZ_EX/47               #798=     #798                 ?1716               	;0	>>1716
1714 600   ISSET_ISEMPTY_CV/197      #799=     16?17                ?0                  	;16777216
1715 600   BOOL/52                   #798=     #799                 ?0                  	;0
1716 600   BOOL_NOT/13               #800=     #798                 ?0                  	;0	<<1713
1717 600   JMPZ/43                   ?0        #800                 ?1719               	;0	>>1719
1718 601   GOTO/253                  ?0        ?1786                ?1193               	;0
1719 603   INIT_FCALL_BY_NAME/59     ?0        ?0                   1194:'generateError'	;1	<<1717
1720 603   SEND_VAL_EX/116           ?80       1196:'NO_CREDENTIALS' ?1                  	;0
1721 603   DO_FCALL_BY_NAME/131      ?750      ?0                   ?0                  	;0
1722 604   GOTO/253                  ?0        ?1786                ?1197               	;0
1723 606   INIT_FCALL_BY_NAME/59     ?0        ?0                   1198:'implode'      	;2
1724 606   SEND_VAL_EX/116           ?80       1200:' AND '         ?1                  	;0
1725 606   SEND_VAR_EX/66            ?96       16?48                ?2                  	;0
1726 606   DO_FCALL_BY_NAME/131      $802=     ?0                   ?0                  	;0
1727 606   CONCAT/8                  #803=     1201:'WHERE '        $802                	;0
1728 606   ASSIGN/38                 ?753      16?47                #803                	;0
1729 607   INIT_FCALL_BY_NAME/59     ?0        ?0                   1202:'implode'      	;2
1730 607   SEND_VAL_EX/116           ?80       1204:','             ?1                  	;0
1731 607   FETCH_DIM_FUNC_ARG/93     $805=     16?7                 1205:'channel_ids'  	;2
1732 607   SEND_VAR_EX/66            ?96       $805                 ?2                  	;0
1733 607   DO_FCALL_BY_NAME/131      $806=     ?0                   ?0                  	;0
1734 607   CONCAT/8                  #807=     1206:'FIELD(id,'     $806                	;0
1735 607   CONCAT/8                  #808=     #807                 1207:')'            	;0
1736 607   ASSIGN/38                 ?758      16?49                #808                	;0
1737 608   FETCH_STATIC_PROP_R/173   $810=     1208:'db'            1209:'XUI'          	;0
1738 608   INIT_METHOD_CALL/112      ?0        $810                 1211:'query'        	;1
1739 608   ROPE_INIT/54              #812=     ?0                   1213:'SELECT t1.id,t1.epg_id,t1.added,t1.allow_record,t1.year,t1.channel_id,t1.movie_properties,t1.stream_source,t1.tv_archive_server_id,t1.vframes_server_id,t1.tv_archive_duration,t1.stream_icon,t1.custom_sid,t1.category_id,t1.stream_display_name,t1.series_no,t1.direct_source,t2.type_output,t1.target_container,t2.live,t1.rtmp_output,t1.order,t2.type_key FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type '	;5
1740 608   ROPE_ADD/55               #812=     #812                 16?47               	;1
1741 608   ROPE_ADD/55               #812=     #812                 1214:' ORDER BY '   	;2
1742 608   ROPE_ADD/55               #812=     #812                 16?49               	;3
1743 608   ROPE_END/56               #811=     #812                 1215:';'            	;4
1744 608   SEND_VAL_EX/116           ?80       #811                 ?1                  	;0
1745 608   SEND_UNPACK/165           ?80       16?50                ?1                  	;0
1746 608   DO_FCALL/60               ?764      ?0                   ?0                  	;0
1747 609   FETCH_STATIC_PROP_R/173   $816=     1216:'db'            1217:'XUI'          	;0
1748 609   INIT_METHOD_CALL/112      ?0        $816                 1219:'get_rows'     	;0
1749 609   DO_FCALL/60               $817=     ?0                   ?0                  	;0
1750 609   ASSIGN/38                 ?767      16?8                 $817                	;0
1751 611   GOTO/253                  ?0        ?1776                ?1221               	;0
1752 613   FETCH_STATIC_PROP_R/173   $819=     1222:'rCached'       1223:'XUI'          	;0
1753 613   JMPZ/43                   ?0        $819                 ?1755               	;0	>>1755
1754 614   GOTO/253                  ?0        ?1777                ?1225               	;0
1755 616   ASSIGN/38                 ?769      16?8                 1226:array (
)      	;0	<<1753
1756 617   INIT_FCALL_BY_NAME/59     ?0        ?0                   1227:'count'        	;1
1757 617   FETCH_DIM_FUNC_ARG/93     $821=     16?7                 1229:'channel_ids'  	;1
1758 617   SEND_VAR_EX/66            ?80       $821                 ?1                  	;0
1759 617   DO_FCALL_BY_NAME/131      $822=     ?0                   ?0                  	;0
1760 617   IS_SMALLER/19             #823=     1230:0               $822                	;0
1761 617   BOOL_NOT/13               #824=     #823                 ?0                  	;0
1762 617   JMPZ/43                   ?0        #824                 ?1764               	;0	>>1764
1763 618   GOTO/253                  ?0        ?1751                ?1231               	;0
1764 620   ASSIGN/38                 $825=     16?48                1232:array (
)      	;0	<<1762
1765 620   ASSIGN/38                 ?775      16?50                $825                	;0
1766 621   INIT_FCALL_BY_NAME/59     ?0        ?0                   1233:'implode'      	;2
1767 621   SEND_VAL_EX/116           ?80       1235:','             ?1                  	;0
1768 621   FETCH_DIM_FUNC_ARG/93     $828=     16?7                 1236:'channel_ids'  	;2
1769 621   SEND_VAR_EX/66            ?96       $828                 ?2                  	;0
1770 621   DO_FCALL_BY_NAME/131      $829=     ?0                   ?0                  	;0
1771 621   CONCAT/8                  #830=     1237:'`id` IN ('     $829                	;0
1772 621   CONCAT/8                  #831=     #830                 1238:')'            	;0
1773 621   ASSIGN_DIM/147            ?776      16?48                ?2670195408         	;0
1774 621   OP_DATA/137               ?0        #831                 ?0                  	;0
1775 622   GOTO/253                  ?0        ?1723                ?1239               	;0
1776 624   GOTO/253                  ?0        ?1779                ?1240               	;0
1777 626   FETCH_DIM_R/81            $832=     16?7                 1241:'channel_ids'  	;0
1778 626   ASSIGN/38                 ?782      16?8                 $832                	;0
1779 628   INIT_STATIC_METHOD_CALL/113 ?0        1243:'XUI'           1245:'eE26f6aDbd1E84E9'	;1
1780 628   FETCH_DIM_FUNC_ARG/93     $835=     16?7                 1247:'channel_ids'  	;1
1781 628   SEND_VAR_EX/66            ?80       $835                 ?1                  	;0
1782 628   DO_FCALL/60               $836=     ?0                   ?0                  	;0
1783 628   ASSIGN_DIM/147            ?783      16?7                 1242:'channel_ids'  	;0
1784 628   OP_DATA/137               ?0        $836                 ?0                  	;0
1785 629   GOTO/253                  ?0        ?75                  ?1248               	;0
1786 632   INIT_STATIC_METHOD_CALL/113 ?0        1249:'XUI'           1251:'CC988751EEbBf271'	;5
1787 632   SEND_VAL_EX/116           ?80       1253:NULL            ?1                  	;0
1788 632   SEND_VAR_EX/66            ?96       16?16                ?2                  	;0
1789 632   SEND_VAR_EX/66            ?112      16?17                ?3                  	;0
1790 632   SEND_VAL_EX/116           ?128      1254:true            ?4                  	;0
1791 632   SEND_VAL_EX/116           ?144      1255:false           ?5                  	;0
1792 632   DO_FCALL/60               $837=     ?0                   ?0                  	;0
1793 632   ASSIGN/38                 $838=     16?7                 $837                	;0
1794 632   JMPZ/43                   ?0        $838                 ?1796               	;0	>>1796
1795 633   GOTO/253                  ?0        ?64                  ?1256               	;0
1796 635   INIT_STATIC_METHOD_CALL/113 ?0        1257:'XUI'           1259:'a1FeF6439c28608e'	;3	<<1794
1797 635   SEND_VAL_EX/116           ?80       1261:NULL            ?1                  	;0
1798 635   SEND_VAL_EX/116           ?96       1262:NULL            ?2                  	;0
1799 635   SEND_VAR_EX/66            ?112      16?16                ?3                  	;0
1800 635   DO_FCALL/60               ?788      ?0                   ?0                  	;0
1801 636   INIT_FCALL_BY_NAME/59     ?0        ?0                   1263:'generateError'	;1
1802 636   SEND_VAL_EX/116           ?80       1265:'INVALID_CREDENTIALS' ?1                  	;0
1803 636   DO_FCALL_BY_NAME/131      ?789      ?0                   ?0                  	;0
1804 637   GOTO/253                  ?0        ?1667                ?1266               	;0
1805 638   GOTO/253                  ?0        ?64                  ?1267               	;0
1806 640   NOP/0                     ?0        ?0                   ?0                  	;0
1807 654   NOP/0                     ?0        1268:1               ?0                  	;4294967295
*/

?>