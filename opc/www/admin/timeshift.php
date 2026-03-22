<?php


function getLength($b4b2b0820a243f3b)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  65  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  67  ASSIGN/38                 ?0        16?1                 0:0                 	;0
	2  68  FE_RESET_R/77             $4=       16?0                 ?7                  	;0
	3  68  FE_FETCH_R/78             ?0        $4                   16?2                	;7	>>7	<<6
	4  69  FETCH_DIM_R/81            $5=       16?2                 1:'filesize'        	;0
	5  69  ASSIGN_ADD/23             ?3        16?1                 $5                  	;0
	6  70  JMP/42                    ?0        ?3                   ?0                  	;0	>>3
	7  70  FE_FREE/127               ?0        $4                   ?0                  	;0	<<2
	8  73  RETURN/62                 ?0        16?1                 ?0                  	;0
	9  74  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   369  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   370  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
	2   370  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   370  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4   370  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5   370  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6   371  GOTO/253                  ?0        ?9                   ?3                  	;0
	7   373  INIT_METHOD_CALL/112      ?0        16?0                 4:'close_mysql'     	;0	<<5
	8   373  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	9   375  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?665                 ?0                  	;0	>>665
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'substr'          	;3
2   5    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
3   5    SEND_VAL_EX/116           ?96       3:6                  ?2                  	;0
4   5    SEND_VAL_EX/116           ?112      4:2                  ?3                  	;0
5   5    DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
6   5    ASSIGN/38                 ?1        16?0                 $41                 	;0
7   6    ASSIGN/38                 ?2        16?2                 5:0                 	;0
8   7    ASSIGN/38                 ?3        16?3                 16?4                	;0
9   9    INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'mktime'          	;6
10  9    SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
11  9    SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
12  9    SEND_VAL_EX/116           ?112      8:0                  ?3                  	;0
13  9    SEND_VAR_EX/66            ?128      16?6                 ?4                  	;0
14  9    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
15  9    SEND_VAR_EX/66            ?160      16?7                 ?6                  	;0
16  9    DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
17  9    ASSIGN/38                 ?5        16?5                 $45                 	;0
18  10   GOTO/253                  ?0        ?724                 ?9                  	;0
19  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'f82199Eff9017Bc9'	;0
20  13   DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
21  15   GOTO/253                  ?0        ?190                 ?12                 	;0
22  17   GOTO/253                  ?0        ?71                  ?13                 	;0
23  20   IS_SMALLER/19             #48=      16?8                 16?9                	;0
24  20   BOOL_NOT/13               #49=      #48                  ?0                  	;0
25  20   JMPZ/43                   ?0        #49                  ?27                 	;0	>>27
26  21   GOTO/253                  ?0        ?698                 ?14                 	;0
27  23   FETCH_CONSTANT/99         #50=      ?0                   15:'ARCHIVE_PATH'   	;16	<<25
28  23   CONCAT/8                  #51=      #50                  16?11               	;0
29  23   CONCAT/8                  #52=      #51                  18:'/'              	;0
30  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'date'           	;2
31  23   SEND_VAL_EX/116           ?80       21:'Y-m-d:H-i'       ?1                  	;0
32  23   MUL/3                     #53=      16?8                 22:60               	;0
33  23   ADD/1                     #54=      16?5                 #53                 	;0
34  23   SEND_VAL_EX/116           ?96       #54                  ?2                  	;0
35  23   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
36  23   CONCAT/8                  #56=      #52                  $55                 	;0
37  23   CONCAT/8                  #57=      #56                  23:'.ts'            	;0
38  23   ASSIGN/38                 ?17       16?10                #57                 	;0
39  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'file_exists'    	;1
40  24   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
41  24   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
42  24   BOOL_NOT/13               #60=      $59                  ?0                  	;0
43  24   JMPZ/43                   ?0        #60                  ?45                 	;0	>>45
44  25   GOTO/253                  ?0        ?695                 ?26                 	;0
45  27   INIT_ARRAY/71             #62=      16?10                27:'filename'       	;10	<<43
46  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'filesize'       	;1
47  27   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
48  27   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
49  27   ADD_ARRAY_ELEMENT/72      #62=      $63                  30:'filesize'       	;0
50  27   ASSIGN_DIM/147            ?20       16?12                ?4397406            	;0
51  27   OP_DATA/137               ?0        #62                  ?0                  	;0
52  28   GOTO/253                  ?0        ?695                 ?31                 	;0
53  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'file_exists'    	;1
54  30   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
55  30   DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
56  30   BOOL_NOT/13               #65=      $64                  ?0                  	;0
57  30   JMPNZ_EX/47               #65=      #65                  ?63                 	;0	>>63
58  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'is_readable'    	;1
59  30   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
60  30   DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
61  30   BOOL_NOT/13               #67=      $66                  ?0                  	;0
62  30   BOOL/52                   #65=      #67                  ?0                  	;0
63  30   BOOL_NOT/13               #68=      #65                  ?0                  	;0	<<57
64  30   JMPZ/43                   ?0        #68                  ?66                 	;0	>>66
65  31   GOTO/253                  ?0        ?68                  ?36                 	;0
66  33   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'f82199Eff9017BC9'	;0	<<64
67  33   DO_FCALL_BY_NAME/131      ?28       ?0                   ?0                  	;0
68  35   ASSIGN/38                 ?29       16?12                39:array (
)        	;0
69  36   ASSIGN/38                 ?30       16?8                 40:0                	;0
70  37   GOTO/253                  ?0        ?23                  ?41                 	;0
71  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'json_decode'    	;2
72  39   INIT_STATIC_METHOD_CALL/113 ?0        44:'Xui\\Functions'  46:'decrypt'        	;3
73  39   FETCH_STATIC_PROP_FUNC_ARG/177 $72=      48:'rRequest'        49:'XUI'            	;1
74  39   FETCH_DIM_FUNC_ARG/93     $73=      $72                  51:'uitoken'        	;1
75  39   SEND_VAR_EX/66            ?80       $73                  ?1                  	;0
76  39   FETCH_STATIC_PROP_FUNC_ARG/177 $74=      52:'rSettings'       53:'XUI'            	;2
77  39   FETCH_DIM_FUNC_ARG/93     $75=      $74                  55:'live_streaming_pass'	;2
78  39   SEND_VAR_EX/66            ?96       $75                  ?2                  	;0
79  39   FETCH_CONSTANT/99         #76=      ?0                   56:'OPENSSL_EXTRA'  	;16
80  39   SEND_VAL_EX/116           ?112      #76                  ?3                  	;0
81  39   DO_FCALL/60               $77=      ?0                   ?0                  	;0
82  39   SEND_VAR_NO_REF_EX/50     ?80       $77                  ?1                  	;0
83  39   SEND_VAL_EX/116           ?96       59:true              ?2                  	;0
84  39   DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
85  39   ASSIGN/38                 ?38       16?13                $78                 	;0
86  40   FETCH_DIM_R/81            $82=      16?13                64:'stream_id'      	;0
87  40   FETCH_STATIC_PROP_W/174   $80=      60:'rRequest'        61:'XUI'            	;0
88  40   ASSIGN_DIM/147            ?40       $80                  63:'stream'         	;0
89  40   OP_DATA/137               ?0        $82                  ?0                  	;0
90  41   FETCH_STATIC_PROP_W/174   $83=      65:'rRequest'        66:'XUI'            	;0
91  41   ASSIGN_DIM/147            ?43       $83                  68:'extension'      	;0
92  41   OP_DATA/137               ?0        69:'m3u8'            ?0                  	;0
93  42   ISSET_ISEMPTY_DIM_OBJ/115 #85=      16?13                70:'start'          	;33554432
94  42   BOOL_NOT/13               #86=      #85                  ?0                  	;0
95  42   JMPZ/43                   ?0        #86                  ?97                 	;0	>>97
96  43   GOTO/253                  ?0        ?559                 ?71                 	;0
97  45   FETCH_DIM_R/81            $89=      16?13                76:'start'          	;0	<<95
98  45   FETCH_STATIC_PROP_W/174   $87=      72:'rRequest'        73:'XUI'            	;0
99  45   ASSIGN_DIM/147            ?47       $87                  75:'start'          	;0
100 45   OP_DATA/137               ?0        $89                  ?0                  	;0
101 46   GOTO/253                  ?0        ?559                 ?77                 	;0
102 48   GOTO/253                  ?0        ?9                   ?78                 	;0
103 50   INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'explode'        	;2
104 50   SEND_VAL_EX/116           ?80       81:'-'               ?1                  	;0
105 50   SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
106 50   DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
107 50   FETCH_LIST/98             $91=      $90                  82:0                	;0
108 50   ASSIGN/38                 ?51       16?1                 $91                 	;0
109 50   FETCH_LIST/98             $93=      $90                  83:1                	;0
110 50   ASSIGN/38                 ?53       16?4                 $93                 	;0
111 50   FREE/70                   ?0        $90                  ?0                  	;0
112 51   INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'substr'         	;3
113 51   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
114 51   SEND_VAL_EX/116           ?96       86:0                 ?2                  	;0
115 51   SEND_VAL_EX/116           ?112      87:4                 ?3                  	;0
116 51   DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
117 51   ASSIGN/38                 ?55       16?7                 $95                 	;0
118 52   INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'substr'         	;3
119 52   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
120 52   SEND_VAL_EX/116           ?96       90:4                 ?2                  	;0
121 52   SEND_VAL_EX/116           ?112      91:2                 ?3                  	;0
122 52   DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
123 52   ASSIGN/38                 ?57       16?6                 $97                 	;0
124 53   GOTO/253                  ?0        ?1                   ?92                 	;0
125 56   INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'substr_count'   	;2
126 56   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
127 56   SEND_VAL_EX/116           ?96       95:'-'               ?2                  	;0
128 56   DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
129 56   IS_EQUAL/17               #100=     $99                  96:1                	;0
130 56   JMPZ/43                   ?0        #100                 ?132                	;0	>>132
131 57   GOTO/253                  ?0        ?103                 ?97                 	;0
132 59   INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'explode'        	;2	<<130
133 59   SEND_VAL_EX/116           ?80       100:':'              ?1                  	;0
134 59   SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
135 59   DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
136 59   FETCH_LIST/98             $102=     $101                 101:0               	;0
137 59   ASSIGN/38                 ?62       16?1                 $102                	;0
138 59   FETCH_LIST/98             $104=     $101                 102:1               	;0
139 59   ASSIGN/38                 ?64       16?4                 $104                	;0
140 59   FREE/70                   ?0        $101                 ?0                  	;0
141 60   INIT_FCALL_BY_NAME/59     ?0        ?0                   103:'explode'       	;2
142 60   SEND_VAL_EX/116           ?80       105:'-'              ?1                  	;0
143 60   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
144 60   DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
145 60   FETCH_LIST/98             $107=     $106                 106:0               	;0
146 60   ASSIGN/38                 ?67       16?7                 $107                	;0
147 60   FETCH_LIST/98             $109=     $106                 107:1               	;0
148 60   ASSIGN/38                 ?69       16?6                 $109                	;0
149 60   FETCH_LIST/98             $111=     $106                 108:2               	;0
150 60   ASSIGN/38                 ?71       16?0                 $111                	;0
151 60   FREE/70                   ?0        $106                 ?0                  	;0
152 61   INIT_FCALL_BY_NAME/59     ?0        ?0                   109:'explode'       	;2
153 61   SEND_VAL_EX/116           ?80       111:'-'              ?1                  	;0
154 61   SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
155 61   DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
156 61   FETCH_LIST/98             $114=     $113                 112:0               	;0
157 61   ASSIGN/38                 ?74       16?3                 $114                	;0
158 61   FETCH_LIST/98             $116=     $113                 113:1               	;0
159 61   ASSIGN/38                 ?76       16?2                 $116                	;0
160 61   FREE/70                   ?0        $113                 ?0                  	;0
161 62   GOTO/253                  ?0        ?102                 ?114                	;0
162 65   NOP/0                     ?0        ?0                   ?0                  	;0
163 75   FETCH_STATIC_PROP_R/173   $118=     115:'rSettings'      116:'XUI'           	;0
164 75   FETCH_DIM_R/81            $119=     $118                 118:'use_buffer'    	;0
165 75   IS_EQUAL/17               #120=     $119                 119:0               	;0
166 75   BOOL_NOT/13               #121=     #120                 ?0                  	;0
167 75   JMPZ/43                   ?0        #121                 ?169                	;0	>>169
168 76   GOTO/253                  ?0        ?172                 ?120                	;0
169 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'header'        	;1	<<167
170 78   SEND_VAL_EX/116           ?80       123:'X-Accel-Buffering: no' ?1                  	;0
171 78   DO_FCALL_BY_NAME/131      ?81       ?0                   ?0                  	;0
172 80   FETCH_STATIC_PROP_IS/176  $123=     124:'rRequest'       125:'XUI'           	;0
173 80   ISSET_ISEMPTY_DIM_OBJ/115 #124=     $123                 127:'uitoken'       	;16777216
174 80   BOOL_NOT/13               #125=     #124                 ?0                  	;0
175 80   JMPZ/43                   ?0        #125                 ?177                	;0	>>177
176 81   GOTO/253                  ?0        ?22                  ?128                	;0
177 83   GOTO/253                  ?0        ?699                 ?129                	;0	<<175
178 85   FETCH_DIM_R/81            $126=     16?13                130:'expires'       	;0
179 85   INIT_FCALL_BY_NAME/59     ?0        ?0                   131:'time'          	;0
180 85   DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
181 85   IS_SMALLER/19             #128=     $126                 $127                	;0
182 85   JMPNZ_EX/47               #128=     #128                 ?185                	;0	>>185
183 85   BOOL_NOT/13               #129=     16?15                ?0                  	;0
184 85   BOOL/52                   #128=     #129                 ?0                  	;0
185 85   BOOL_NOT/13               #130=     #128                 ?0                  	;0	<<182
186 85   JMPZ/43                   ?0        #130                 ?188                	;0	>>188
187 86   GOTO/253                  ?0        ?190                 ?133                	;0
188 88   INIT_FCALL_BY_NAME/59     ?0        ?0                   134:'f82199eFF9017BC9'	;0	<<186
189 88   DO_FCALL_BY_NAME/131      ?90       ?0                   ?0                  	;0
190 91   NEW/68                    $132=     136:'Database'       ?96                 	;1
191 91   SEND_VAL_EX/116           ?80       138:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
192 91   DO_FCALL/60               ?92       ?8                   ?0                  	;0
193 91   ASSIGN/38                 ?93       16?16                $132                	;0
194 92   GOTO/253                  ?0        ?645                 ?139                	;0
195 94   INIT_FCALL_BY_NAME/59     ?0        ?0                   140:'count'         	;1
196 94   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
197 94   DO_FCALL_BY_NAME/131      $135=     ?0                   ?0                  	;0
198 94   IS_EQUAL/17               #136=     $135                 142:0               	;0
199 94   BOOL_NOT/13               #137=     #136                 ?0                  	;0
200 94   JMPZ/43                   ?0        #137                 ?202                	;0	>>202
201 95   GOTO/253                  ?0        ?204                 ?143                	;0
202 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   144:'F82199eFf9017Bc9'	;0	<<200
203 97   DO_FCALL_BY_NAME/131      ?97       ?0                   ?0                  	;0
204 100  SWITCH_STRING/188         ?0        16?17                146:array (
  'm3u8' => 210,
  'ts' => 316,
)	;558
205 101  CASE/48                   #139=     16?17                147:'m3u8'          	;0	>>207
206 101  JMPNZ/44                  ?0        #139                 ?210                	;0	>>210
207 159  CASE/48                   #139=     16?17                148:'ts'            	;0	>>209	<<205
208 159  JMPNZ/44                  ?0        #139                 ?316                	;0	>>316
209 159  JMP/42                    ?0        ?558                 ?0                  	;0	>>558	<<207
210 102  GOTO/253                  ?0        ?269                 ?149                	;0	<<206
211 105  INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'filesize'      	;1
212 105  SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
213 105  DO_FCALL_BY_NAME/131      $140=     ?0                   ?0                  	;0
214 105  ASSIGN/38                 ?100      16?18                $140                	;0
215 106  INIT_FCALL_BY_NAME/59     ?0        ?0                   152:'header'        	;1
216 106  CONCAT/8                  #142=     154:'Content-Length: ' 16?18               	;0
217 106  SEND_VAL_EX/116           ?80       #142                 ?1                  	;0
218 106  DO_FCALL_BY_NAME/131      ?102      ?0                   ?0                  	;0
219 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'header'        	;1
220 107  SEND_VAL_EX/116           ?80       157:'Content-Type: video/mp2t' ?1                  	;0
221 107  DO_FCALL_BY_NAME/131      ?103      ?0                   ?0                  	;0
222 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'readfile'      	;1
223 108  SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
224 108  DO_FCALL_BY_NAME/131      ?104      ?0                   ?0                  	;0
225 109  GOTO/253                  ?0        ?312                 ?160                	;0
226 111  ASSIGN_CONCAT/30          ?105      16?20                161:'#EXT-X-TARGETDURATION:60
'	;0
227 112  ASSIGN_CONCAT/30          ?106      16?20                162:'#EXT-X-MEDIA-SEQUENCE:0
'	;0
228 113  ASSIGN_CONCAT/30          ?107      16?20                163:'#EXT-X-PLAYLIST-TYPE:VOD
'	;0
229 114  FE_RESET_R/77             $149=     16?12                ?264                	;0
230 114  FE_FETCH_R/78             #150=     $149                 16?21               	;264	>>264	<<263
231 114  ASSIGN/38                 ?110      16?22                #150                	;0
232 115  ASSIGN_CONCAT/30          ?111      16?20                164:'#EXTINF:60.0,
'	;0
233 116  FETCH_STATIC_PROP_IS/176  $153=     165:'rRequest'       166:'XUI'           	;0
234 116  ISSET_ISEMPTY_DIM_OBJ/115 #154=     $153                 168:'uitoken'       	;16777216
235 116  BOOL_NOT/13               #155=     #154                 ?0                  	;0
236 116  JMPZ/43                   ?0        #155                 ?239                	;0	>>239
237 117  NOP/0                     ?0        ?0                   ?0                  	;1
238 117  GOTO/253                  ?0        ?252                 ?169                	;0
239 119  CONCAT/8                  #156=     170:'/admin/timeshift?extension=m3u8&stream=' 16?11               	;0	<<236
240 119  CONCAT/8                  #157=     #156                 171:'&segment='     	;0
241 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'basename'      	;1
242 119  FETCH_DIM_FUNC_ARG/93     $158=     16?21                174:'filename'      	;1
243 119  SEND_VAR_EX/66            ?80       $158                 ?1                  	;0
244 119  DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
245 119  CONCAT/8                  #160=     #157                 $159                	;0
246 119  CONCAT/8                  #161=     #160                 175:'&password='    	;0
247 119  CONCAT/8                  #162=     #161                 16?23               	;0
248 119  CONCAT/8                  #163=     #162                 176:'
'             	;0
249 119  ASSIGN_CONCAT/30          ?123      16?20                #163                	;0
250 120  NOP/0                     ?0        ?0                   ?0                  	;1
251 120  GOTO/253                  ?0        ?263                 ?177                	;0
252 122  INIT_FCALL_BY_NAME/59     ?0        ?0                   178:'basename'      	;1
253 122  FETCH_DIM_FUNC_ARG/93     $165=     16?21                180:'filename'      	;1
254 122  SEND_VAR_EX/66            ?80       $165                 ?1                  	;0
255 122  DO_FCALL_BY_NAME/131      $166=     ?0                   ?0                  	;0
256 122  CONCAT/8                  #167=     181:'/admin/timeshift?extension=m3u8&segment=' $166                	;0
257 122  CONCAT/8                  #168=     #167                 182:'&uitoken='     	;0
258 122  FETCH_STATIC_PROP_R/173   $169=     183:'rRequest'       184:'XUI'           	;0
259 122  FETCH_DIM_R/81            $170=     $169                 186:'uitoken'       	;0
260 122  CONCAT/8                  #171=     #168                 $170                	;0
261 122  CONCAT/8                  #172=     #171                 187:'
'             	;0
262 122  ASSIGN_CONCAT/30          ?132      16?20                #172                	;0
263 124  JMP/42                    ?0        ?230                 ?0                  	;0	>>230
264 124  FE_FREE/127               ?0        $149                 ?0                  	;0	<<229
265 127  GOTO/253                  ?0        ?297                 ?188                	;0
266 129  EXIT/79                   ?0        ?0                   ?0                  	;0
267 131  GOTO/253                  ?0        ?679                 ?189                	;0
268 132  GOTO/253                  ?0        ?316                 ?190                	;0
269 134  FETCH_STATIC_PROP_IS/176  $174=     191:'rRequest'       192:'XUI'           	;0
270 134  ISSET_ISEMPTY_DIM_OBJ/115 #175=     $174                 194:'segment'       	;16777216
271 134  JMPZ/43                   ?0        #175                 ?273                	;0	>>273
272 135  GOTO/253                  ?0        ?313                 ?195                	;0
273 137  FETCH_CONSTANT/99         #176=     ?0                   196:'ARCHIVE_PATH'  	;16	<<271
274 137  CONCAT/8                  #177=     #176                 16?11               	;0
275 137  CONCAT/8                  #178=     #177                 199:'/'             	;0
276 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   200:'str_replace'   	;3
277 137  SEND_VAL_EX/116           ?80       202:array (
  0 => '\\',
  1 => '/',
) ?1                  	;0
278 137  SEND_VAL_EX/116           ?96       203:''               ?2                  	;0
279 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'urldecode'     	;1
280 137  FETCH_STATIC_PROP_FUNC_ARG/177 $179=     206:'rRequest'       207:'XUI'           	;1
281 137  FETCH_DIM_FUNC_ARG/93     $180=     $179                 209:'segment'       	;1
282 137  SEND_VAR_EX/66            ?80       $180                 ?1                  	;0
283 137  DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
284 137  SEND_VAR_NO_REF_EX/50     ?112      $181                 ?3                  	;0
285 137  DO_FCALL_BY_NAME/131      $182=     ?0                   ?0                  	;0
286 137  CONCAT/8                  #183=     #178                 $182                	;0
287 137  ASSIGN/38                 ?143      16?19                #183                	;0
288 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   210:'file_exists'   	;1
289 138  SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
290 138  DO_FCALL_BY_NAME/131      $185=     ?0                   ?0                  	;0
291 138  JMPZ/43                   ?0        $185                 ?293                	;0	>>293
292 139  GOTO/253                  ?0        ?211                 ?212                	;0
293 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   213:'F82199eff9017BC9'	;0	<<291
294 141  DO_FCALL_BY_NAME/131      ?145      ?0                   ?0                  	;0
295 142  GOTO/253                  ?0        ?312                 ?215                	;0
296 143  GOTO/253                  ?0        ?211                 ?216                	;0
297 145  ASSIGN_CONCAT/30          ?146      16?20                217:'#EXT-X-ENDLIST'	;0
298 146  INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'ob_end_clean'  	;0
299 146  DO_FCALL_BY_NAME/131      ?147      ?0                   ?0                  	;0
300 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   220:'header'        	;1
301 147  SEND_VAL_EX/116           ?80       222:'Content-Type: application/x-mpegurl' ?1                  	;0
302 147  DO_FCALL_BY_NAME/131      ?148      ?0                   ?0                  	;0
303 148  INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'header'        	;1
304 148  INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'strlen'        	;1
305 148  SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
306 148  DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
307 148  CONCAT/8                  #191=     227:'Content-Length: ' $190                	;0
308 148  SEND_VAL_EX/116           ?80       #191                 ?1                  	;0
309 148  DO_FCALL_BY_NAME/131      ?151      ?0                   ?0                  	;0
310 149  ECHO/40                   ?0        16?20                ?0                  	;0
311 150  GOTO/253                  ?0        ?266                 ?228                	;0
312 153  GOTO/253                  ?0        ?267                 ?229                	;0
313 155  ASSIGN/38                 ?152      16?20                230:'#EXTM3U
'      	;0
314 156  ASSIGN_CONCAT/30          ?153      16?20                231:'#EXT-X-VERSION:3
'	;0
315 157  GOTO/253                  ?0        ?226                 ?232                	;0
316 160  GOTO/253                  ?0        ?524                 ?233                	;0	<<208
317 162  INIT_FCALL_BY_NAME/59     ?0        ?0                   234:'header'        	;1
318 162  ROPE_INIT/54              #196=     ?0                   236:'Content-Range: bytes '	;6
319 162  ROPE_ADD/55               #196=     #196                 16?24               	;1
320 162  ROPE_ADD/55               #196=     #196                 237:'-'             	;2
321 162  ROPE_ADD/55               #196=     #196                 16?25               	;3
322 162  ROPE_ADD/55               #196=     #196                 238:'/'             	;4
323 162  ROPE_END/56               #195=     #196                 16?26               	;5
324 162  SEND_VAL_EX/116           ?80       #195                 ?1                  	;0
325 162  DO_FCALL_BY_NAME/131      ?158      ?0                   ?0                  	;0
326 163  EXIT/79                   ?0        ?0                   ?0                  	;0
327 165  ASSIGN/38                 ?159      16?24                16?27               	;0
328 166  ASSIGN/38                 ?160      16?25                16?28               	;0
329 167  GOTO/253                  ?0        ?330                 ?239                	;0
330 169  SUB/2                     #202=     16?25                16?24               	;0
331 169  ADD/1                     #203=     #202                 240:1               	;0
332 169  ASSIGN/38                 ?163      16?29                #203                	;0
333 170  INIT_FCALL_BY_NAME/59     ?0        ?0                   241:'header'        	;1
334 170  SEND_VAL_EX/116           ?80       243:'HTTP/1.1 206 Partial Content' ?1                  	;0
335 170  DO_FCALL_BY_NAME/131      ?164      ?0                   ?0                  	;0
336 172  INIT_FCALL_BY_NAME/59     ?0        ?0                   244:'header'        	;1
337 172  ROPE_INIT/54              #207=     ?0                   246:'Content-Range: bytes '	;6
338 172  ROPE_ADD/55               #207=     #207                 16?24               	;1
339 172  ROPE_ADD/55               #207=     #207                 247:'-'             	;2
340 172  ROPE_ADD/55               #207=     #207                 16?25               	;3
341 172  ROPE_ADD/55               #207=     #207                 248:'/'             	;4
342 172  ROPE_END/56               #206=     #207                 16?26               	;5
343 172  SEND_VAL_EX/116           ?80       #206                 ?1                  	;0
344 172  DO_FCALL_BY_NAME/131      ?169      ?0                   ?0                  	;0
345 173  INIT_FCALL_BY_NAME/59     ?0        ?0                   249:'header'        	;1
346 173  CONCAT/8                  #211=     251:'Content-Length: ' 16?29               	;0
347 173  SEND_VAL_EX/116           ?80       #211                 ?1                  	;0
348 173  DO_FCALL_BY_NAME/131      ?171      ?0                   ?0                  	;0
349 174  GOTO/253                  ?0        ?372                 ?252                	;0
350 176  INIT_FCALL_BY_NAME/59     ?0        ?0                   253:'explode'       	;2
351 176  SEND_VAL_EX/116           ?80       255:'-'              ?1                  	;0
352 176  SEND_VAR_EX/66            ?96       16?30                ?2                  	;0
353 176  DO_FCALL_BY_NAME/131      $213=     ?0                   ?0                  	;0
354 176  ASSIGN/38                 ?173      16?30                $213                	;0
355 177  FETCH_DIM_R/81            $215=     16?30                256:0               	;0
356 177  ASSIGN/38                 ?175      16?27                $215                	;0
357 178  ISSET_ISEMPTY_DIM_OBJ/115 #217=     16?30                257:1               	;33554432
358 178  JMPZ_EX/46                #217=     #217                 ?364                	;0	>>364
359 178  INIT_FCALL_BY_NAME/59     ?0        ?0                   258:'is_numeric'    	;1
360 178  FETCH_DIM_FUNC_ARG/93     $218=     16?30                260:1               	;1
361 178  SEND_VAR_EX/66            ?80       $218                 ?1                  	;0
362 178  DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
363 178  BOOL/52                   #217=     $219                 ?0                  	;0
364 178  JMPZ/43                   ?0        #217                 ?368                	;0	>>368	<<358
365 178  FETCH_DIM_R/81            $220=     16?30                261:1               	;0
366 178  QM_ASSIGN/22              #221=     $220                 ?0                  	;0
367 178  JMP/42                    ?0        ?369                 ?0                  	;0	>>369
368 178  QM_ASSIGN/22              #221=     16?26                ?0                  	;0	<<364
369 178  ASSIGN/38                 ?181      16?28                #221                	;0	<<367
370 179  GOTO/253                  ?0        ?394                 ?262                	;0
371 181  GOTO/253                  ?0        ?388                 ?263                	;0
372 183  ASSIGN/38                 ?182      16?31                264:0               	;0
373 184  IS_SMALLER/19             #224=     265:0                16?24               	;0
374 184  BOOL_NOT/13               #225=     #224                 ?0                  	;0
375 184  JMPZ/43                   ?0        #225                 ?377                	;0	>>377
376 185  GOTO/253                  ?0        ?386                 ?266                	;0
377 187  INIT_FCALL_BY_NAME/59     ?0        ?0                   267:'floor'         	;1	<<375
378 187  INIT_FCALL_BY_NAME/59     ?0        ?0                   269:'count'         	;1
379 187  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
380 187  DO_FCALL_BY_NAME/131      $226=     ?0                   ?0                  	;0
381 187  DIV/4                     #227=     16?26                $226                	;0
382 187  DIV/4                     #228=     16?24                #227                	;0
383 187  SEND_VAL_EX/116           ?80       #228                 ?1                  	;0
384 187  DO_FCALL_BY_NAME/131      $229=     ?0                   ?0                  	;0
385 187  ASSIGN/38                 ?189      16?31                $229                	;0
386 189  ASSIGN/38                 ?190      16?32                271:false           	;0
387 190  GOTO/253                  ?0        ?415                 ?272                	;0
388 192  INIT_FCALL_BY_NAME/59     ?0        ?0                   273:'substr'        	;2
389 192  SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
390 192  SEND_VAL_EX/116           ?96       275:1                ?2                  	;0
391 192  DO_FCALL_BY_NAME/131      $232=     ?0                   ?0                  	;0
392 192  SUB/2                     #233=     16?26                $232                	;0
393 192  ASSIGN/38                 ?193      16?27                #233                	;0
394 194  IS_SMALLER/19             #235=     16?25                16?28               	;0
395 194  JMPZ/43                   ?0        #235                 ?398                	;0	>>398
396 194  QM_ASSIGN/22              #236=     16?25                ?0                  	;0
397 194  JMP/42                    ?0        ?399                 ?0                  	;0	>>399
398 194  QM_ASSIGN/22              #236=     16?28                ?0                  	;0	<<395
399 194  ASSIGN/38                 ?196      16?28                #236                	;0	<<397
400 195  IS_SMALLER/19             #238=     16?28                16?27               	;0
401 195  JMPNZ_EX/47               #238=     #238                 ?405                	;0	>>405
402 195  SUB/2                     #239=     16?26                276:1               	;0
403 195  IS_SMALLER/19             #240=     #239                 16?27               	;0
404 195  BOOL/52                   #238=     #240                 ?0                  	;0
405 195  JMPNZ_EX/47               #238=     #238                 ?408                	;0	>>408	<<401
406 195  IS_SMALLER_OR_EQUAL/20    #241=     16?26                16?28               	;0
407 195  BOOL/52                   #238=     #241                 ?0                  	;0
408 195  BOOL_NOT/13               #242=     #238                 ?0                  	;0	<<405
409 195  JMPZ/43                   ?0        #242                 ?411                	;0	>>411
410 196  GOTO/253                  ?0        ?327                 ?277                	;0
411 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   278:'header'        	;1	<<409
412 198  SEND_VAL_EX/116           ?80       280:'HTTP/1.1 416 Requested Range Not Satisfiable' ?1                  	;0
413 198  DO_FCALL_BY_NAME/131      ?202      ?0                   ?0                  	;0
414 199  GOTO/253                  ?0        ?317                 ?281                	;0
415 201  ASSIGN/38                 ?203      16?33                282:0               	;0
416 202  ASSIGN/38                 ?204      16?34                283:0               	;0
417 203  FETCH_STATIC_PROP_R/173   $246=     284:'rSettings'      285:'XUI'           	;0
418 203  FETCH_DIM_R/81            $247=     $246                 287:'read_buffer_size'	;0
419 203  ASSIGN/38                 ?207      16?35                $247                	;0
420 204  FE_RESET_R/77             $249=     16?12                ?496                	;0
421 204  FE_FETCH_R/78             #250=     $249                 16?21               	;496	>>496	<<495
422 204  ASSIGN/38                 ?210      16?22                #250                	;0
423 205  NOP/0                     ?0        ?0                   ?0                  	;1
424 205  GOTO/253                  ?0        ?425                 ?288                	;0
425 207  FETCH_DIM_R/81            $252=     16?21                289:'filesize'      	;0
426 207  ASSIGN_ADD/23             ?212      16?34                $252                	;0
427 208  BOOL_NOT/13               #254=     16?32                ?0                  	;0
428 208  JMPZ_EX/46                #254=     #254                 ?431                	;0	>>431
429 208  IS_SMALLER/19             #255=     290:0                16?31               	;0
430 208  BOOL/52                   #254=     #255                 ?0                  	;0
431 208  BOOL_NOT/13               #256=     #254                 ?0                  	;0	<<428
432 208  JMPZ/43                   ?0        #256                 ?435                	;0	>>435
433 209  NOP/0                     ?0        ?0                   ?0                  	;1
434 209  GOTO/253                  ?0        ?493                 ?291                	;0
435 211  IS_SMALLER/19             #257=     16?22                16?31               	;0	<<432
436 211  JMPZ/43                   ?0        #257                 ?439                	;0	>>439
437 212  NOP/0                     ?0        ?0                   ?0                  	;1
438 212  GOTO/253                  ?0        ?491                 ?292                	;0
439 214  ASSIGN/38                 ?217      16?32                293:true            	;0	<<436
440 215  SUB/2                     #259=     16?24                16?34               	;0
441 215  ASSIGN/38                 ?219      16?33                #259                	;0
442 216  NOP/0                     ?0        ?0                   ?0                  	;1
443 216  GOTO/253                  ?0        ?489                 ?294                	;0
444 218  INIT_FCALL_BY_NAME/59     ?0        ?0                   295:'fopen'         	;2
445 218  FETCH_DIM_FUNC_ARG/93     $261=     16?21                297:'filename'      	;1
446 218  SEND_VAR_EX/66            ?80       $261                 ?1                  	;0
447 218  SEND_VAL_EX/116           ?96       298:'rb'             ?2                  	;0
448 218  DO_FCALL_BY_NAME/131      $262=     ?0                   ?0                  	;0
449 218  ASSIGN/38                 ?222      16?36                $262                	;0
450 219  INIT_FCALL_BY_NAME/59     ?0        ?0                   299:'fseek'         	;2
451 219  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
452 219  SEND_VAR_EX/66            ?96       16?33                ?2                  	;0
453 219  DO_FCALL_BY_NAME/131      ?223      ?0                   ?0                  	;0
454 221  INIT_FCALL_BY_NAME/59     ?0        ?0                   301:'feof'          	;1
455 221  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
456 221  DO_FCALL_BY_NAME/131      $265=     ?0                   ?0                  	;0
457 221  JMPZ/43                   ?0        $265                 ?460                	;0	>>460
458 222  NOP/0                     ?0        ?0                   ?0                  	;1
459 222  GOTO/253                  ?0        ?474                 ?303                	;0
460 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   304:'ftell'         	;1	<<457
461 224  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
462 224  DO_FCALL_BY_NAME/131      $266=     ?0                   ?0                  	;0
463 224  ASSIGN/38                 ?226      16?37                $266                	;0
464 225  NOP/0                     ?0        ?0                   ?0                  	;1
465 225  GOTO/253                  ?0        ?466                 ?306                	;0
466 227  INIT_FCALL_BY_NAME/59     ?0        ?0                   307:'stream_get_line'	;2
467 227  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
468 227  SEND_VAR_EX/66            ?96       16?35                ?2                  	;0
469 227  DO_FCALL_BY_NAME/131      $268=     ?0                   ?0                  	;0
470 227  ASSIGN/38                 ?228      16?38                $268                	;0
471 228  ECHO/40                   ?0        16?38                ?0                  	;0
472 229  NOP/0                     ?0        ?0                   ?0                  	;1
473 229  GOTO/253                  ?0        ?454                 ?309                	;0
474 231  INIT_FCALL_BY_NAME/59     ?0        ?0                   310:'is_resource'   	;1
475 231  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
476 231  DO_FCALL_BY_NAME/131      $270=     ?0                   ?0                  	;0
477 231  BOOL_NOT/13               #271=     $270                 ?0                  	;0
478 231  JMPZ/43                   ?0        #271                 ?481                	;0	>>481
479 232  NOP/0                     ?0        ?0                   ?0                  	;1
480 232  GOTO/253                  ?0        ?486                 ?312                	;0
481 234  NOP/0                     ?0        ?0                   ?0                  	;1	<<478
482 234  GOTO/253                  ?0        ?483                 ?313                	;0
483 236  INIT_FCALL_BY_NAME/59     ?0        ?0                   314:'fclose'        	;1
484 236  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
485 236  DO_FCALL_BY_NAME/131      ?231      ?0                   ?0                  	;0
486 238  ASSIGN/38                 ?232      16?33                316:0               	;0
487 240  NOP/0                     ?0        ?0                   ?0                  	;1
488 240  GOTO/253                  ?0        ?495                 ?317                	;0
489 242  NOP/0                     ?0        ?0                   ?0                  	;1
490 242  GOTO/253                  ?0        ?493                 ?318                	;0
491 244  NOP/0                     ?0        ?0                   ?0                  	;1
492 244  GOTO/253                  ?0        ?487                 ?319                	;0
493 247  NOP/0                     ?0        ?0                   ?0                  	;1
494 247  GOTO/253                  ?0        ?444                 ?320                	;0
495 248  JMP/42                    ?0        ?421                 ?0                  	;0	>>421
496 248  FE_FREE/127               ?0        $249                 ?0                  	;0	<<420
497 251  GOTO/253                  ?0        ?558                 ?321                	;0
498 253  FETCH_IS/89               $274=     322:'_SERVER'        ?0                  	;0
499 253  ISSET_ISEMPTY_DIM_OBJ/115 #275=     $274                 323:'HTTP_RANGE'    	;33554432
500 253  BOOL_NOT/13               #276=     #275                 ?0                  	;0
501 253  JMPZ/43                   ?0        #276                 ?503                	;0	>>503
502 254  GOTO/253                  ?0        ?336                 ?324                	;0
503 256  ASSIGN/38                 ?236      16?27                16?24               	;0	<<501
504 257  ASSIGN/38                 ?237      16?28                16?25               	;0
505 258  INIT_FCALL_BY_NAME/59     ?0        ?0                   325:'explode'       	;3
506 258  SEND_VAL_EX/116           ?80       327:'='              ?1                  	;0
507 258  FETCH_FUNC_ARG/92         $279=     328:'_SERVER'        ?0                  	;2
508 258  FETCH_DIM_FUNC_ARG/93     $280=     $279                 329:'HTTP_RANGE'    	;2
509 258  SEND_VAR_EX/66            ?96       $280                 ?2                  	;0
510 258  SEND_VAL_EX/116           ?112      330:2                ?3                  	;0
511 258  DO_FCALL_BY_NAME/131      $281=     ?0                   ?0                  	;0
512 258  FETCH_LIST/98             $282=     $281                 331:1               	;0
513 258  ASSIGN/38                 ?242      16?30                $282                	;0
514 258  FREE/70                   ?0        $281                 ?0                  	;0
515 259  INIT_FCALL_BY_NAME/59     ?0        ?0                   332:'strpos'        	;2
516 259  SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
517 259  SEND_VAL_EX/116           ?96       334:','              ?2                  	;0
518 259  DO_FCALL_BY_NAME/131      $284=     ?0                   ?0                  	;0
519 259  IS_NOT_IDENTICAL/16       #285=     $284                 335:false           	;0
520 259  BOOL_NOT/13               #286=     #285                 ?0                  	;0
521 259  JMPZ/43                   ?0        #286                 ?523                	;0	>>523
522 260  GOTO/253                  ?0        ?554                 ?336                	;0
523 262  GOTO/253                  ?0        ?541                 ?337                	;0	<<521
524 264  INIT_FCALL_BY_NAME/59     ?0        ?0                   338:'header'        	;1
525 264  SEND_VAL_EX/116           ?80       340:'Content-Type: video/mp2t' ?1                  	;0
526 264  DO_FCALL_BY_NAME/131      ?246      ?0                   ?0                  	;0
527 265  INIT_FCALL/61             ?0        ?192                 341:'getlength'     	;1
528 265  SEND_VAR/117              ?80       16?12                ?1                  	;0
529 265  DO_FCALL/60               $288=     ?0                   ?0                  	;0
530 265  ASSIGN/38                 $289=     16?26                $288                	;0
531 265  ASSIGN/38                 ?249      16?29                $289                	;0
532 266  INIT_FCALL_BY_NAME/59     ?0        ?0                   342:'header'        	;1
533 266  NOP/0                     ?0        ?0                   ?0                  	;0
534 266  FAST_CONCAT/53            #291=     344:'Accept-Ranges: 0-' 16?29               	;0
535 266  SEND_VAL_EX/116           ?80       #291                 ?1                  	;0
536 266  DO_FCALL_BY_NAME/131      ?251      ?0                   ?0                  	;0
537 267  ASSIGN/38                 ?252      16?24                345:0               	;0
538 268  SUB/2                     #294=     16?26                346:1               	;0
539 268  ASSIGN/38                 ?254      16?25                #294                	;0
540 269  GOTO/253                  ?0        ?498                 ?347                	;0
541 271  INIT_FCALL_BY_NAME/59     ?0        ?0                   348:'header'        	;1
542 271  SEND_VAL_EX/116           ?80       350:'HTTP/1.1 416 Requested Range Not Satisfiable' ?1                  	;0
543 271  DO_FCALL_BY_NAME/131      ?255      ?0                   ?0                  	;0
544 272  INIT_FCALL_BY_NAME/59     ?0        ?0                   351:'header'        	;1
545 272  ROPE_INIT/54              #298=     ?0                   353:'Content-Range: bytes '	;6
546 272  ROPE_ADD/55               #298=     #298                 16?24               	;1
547 272  ROPE_ADD/55               #298=     #298                 354:'-'             	;2
548 272  ROPE_ADD/55               #298=     #298                 16?25               	;3
549 272  ROPE_ADD/55               #298=     #298                 355:'/'             	;4
550 272  ROPE_END/56               #297=     #298                 16?26               	;5
551 272  SEND_VAL_EX/116           ?80       #297                 ?1                  	;0
552 272  DO_FCALL_BY_NAME/131      ?260      ?0                   ?0                  	;0
553 273  EXIT/79                   ?0        ?0                   ?0                  	;0
554 275  IS_EQUAL/17               #302=     16?30                356:'-'             	;0
555 275  JMPZ/43                   ?0        #302                 ?557                	;0	>>557
556 276  GOTO/253                  ?0        ?371                 ?357                	;0
557 278  GOTO/253                  ?0        ?350                 ?358                	;0	<<555
558 281  GOTO/253                  ?0        ?679                 ?359                	;0	<<209
559 284  ISSET_ISEMPTY_DIM_OBJ/115 #303=     16?13                360:'duration'      	;33554432
560 284  BOOL_NOT/13               #304=     #303                 ?0                  	;0
561 284  JMPZ/43                   ?0        #304                 ?563                	;0	>>563
562 285  GOTO/253                  ?0        ?567                 ?361                	;0
563 287  FETCH_DIM_R/81            $307=     16?13                366:'duration'      	;0	<<561
564 287  FETCH_STATIC_PROP_W/174   $305=     362:'rRequest'       363:'XUI'           	;0
565 287  ASSIGN_DIM/147            ?265      $305                 365:'duration'      	;0
566 287  OP_DATA/137               ?0        $307                 ?0                  	;0
567 289  FETCH_STATIC_PROP_R/173   $308=     367:'rSettings'      368:'XUI'           	;0
568 289  FETCH_DIM_R/81            $309=     $308                 370:'ip_subnet_match'	;0
569 289  JMPZ/43                   ?0        $309                 ?602                	;0	>>602
570 289  INIT_FCALL_BY_NAME/59     ?0        ?0                   371:'implode'       	;2
571 289  SEND_VAL_EX/116           ?80       373:'.'              ?1                  	;0
572 289  INIT_FCALL_BY_NAME/59     ?0        ?0                   374:'array_slice'   	;3
573 289  INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'explode'       	;2
574 289  SEND_VAL_EX/116           ?80       378:'.'              ?1                  	;0
575 289  FETCH_DIM_FUNC_ARG/93     $310=     16?13                379:'ip'            	;2
576 289  SEND_VAR_EX/66            ?96       $310                 ?2                  	;0
577 289  DO_FCALL_BY_NAME/131      $311=     ?0                   ?0                  	;0
578 289  SEND_VAR_NO_REF_EX/50     ?80       $311                 ?1                  	;0
579 289  SEND_VAL_EX/116           ?96       380:0                ?2                  	;0
580 289  SEND_VAL_EX/116           ?112      381:-1               ?3                  	;0
581 289  DO_FCALL_BY_NAME/131      $312=     ?0                   ?0                  	;0
582 289  SEND_VAR_NO_REF_EX/50     ?96       $312                 ?2                  	;0
583 289  DO_FCALL_BY_NAME/131      $313=     ?0                   ?0                  	;0
584 289  INIT_FCALL_BY_NAME/59     ?0        ?0                   382:'implode'       	;2
585 289  SEND_VAL_EX/116           ?80       384:'.'              ?1                  	;0
586 289  INIT_FCALL_BY_NAME/59     ?0        ?0                   385:'array_slice'   	;3
587 289  INIT_FCALL_BY_NAME/59     ?0        ?0                   387:'explode'       	;2
588 289  SEND_VAL_EX/116           ?80       389:'.'              ?1                  	;0
589 289  INIT_STATIC_METHOD_CALL/113 ?0        390:'XUI'            392:'aD72B4259ca295b2'	;0
590 289  DO_FCALL/60               $314=     ?0                   ?0                  	;0
591 289  SEND_VAR_NO_REF_EX/50     ?96       $314                 ?2                  	;0
592 289  DO_FCALL_BY_NAME/131      $315=     ?0                   ?0                  	;0
593 289  SEND_VAR_NO_REF_EX/50     ?80       $315                 ?1                  	;0
594 289  SEND_VAL_EX/116           ?96       394:0                ?2                  	;0
595 289  SEND_VAL_EX/116           ?112      395:-1               ?3                  	;0
596 289  DO_FCALL_BY_NAME/131      $316=     ?0                   ?0                  	;0
597 289  SEND_VAR_NO_REF_EX/50     ?96       $316                 ?2                  	;0
598 289  DO_FCALL_BY_NAME/131      $317=     ?0                   ?0                  	;0
599 289  IS_EQUAL/17               #318=     $313                 $317                	;0
600 289  QM_ASSIGN/22              #319=     #318                 ?0                  	;0
601 289  JMP/42                    ?0        ?607                 ?0                  	;0	>>607
602 289  FETCH_DIM_R/81            $320=     16?13                396:'ip'            	;0	<<569
603 289  INIT_STATIC_METHOD_CALL/113 ?0        397:'XUI'            399:'ad72b4259ca295B2'	;0
604 289  DO_FCALL/60               $321=     ?0                   ?0                  	;0
605 289  IS_EQUAL/17               #322=     $320                 $321                	;0
606 289  QM_ASSIGN/22              #319=     #322                 ?0                  	;0
607 289  ASSIGN/38                 ?282      16?15                #319                	;0	<<601
608 290  GOTO/253                  ?0        ?178                 ?401                	;0
609 292  ASSIGN/38                 ?283      16?12                402:array (
)       	;0
610 293  FETCH_CONSTANT/99         #325=     ?0                   403:'ARCHIVE_PATH'  	;16
611 293  CONCAT/8                  #326=     #325                 16?11               	;0
612 293  CONCAT/8                  #327=     #326                 406:'/'             	;0
613 293  INIT_FCALL_BY_NAME/59     ?0        ?0                   407:'date'          	;2
614 293  SEND_VAL_EX/116           ?80       409:'Y-m-d:H-i'      ?1                  	;0
615 293  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
616 293  DO_FCALL_BY_NAME/131      $328=     ?0                   ?0                  	;0
617 293  CONCAT/8                  #329=     #327                 $328                	;0
618 293  CONCAT/8                  #330=     #329                 410:'.ts'           	;0
619 293  ASSIGN/38                 ?290      16?10                #330                	;0
620 294  ISSET_ISEMPTY_CV/197      #332=     16?11                ?0                  	;16777216
621 294  JMPNZ_EX/47               #332=     #332                 ?624                	;0	>>624
622 294  ISSET_ISEMPTY_CV/197      #333=     16?5                 ?0                  	;16777216
623 294  BOOL/52                   #332=     #333                 ?0                  	;0
624 294  JMPNZ_EX/47               #332=     #332                 ?627                	;0	>>627	<<621
625 294  ISSET_ISEMPTY_CV/197      #334=     16?9                 ?0                  	;16777216
626 294  BOOL/52                   #332=     #334                 ?0                  	;0
627 294  BOOL_NOT/13               #335=     #332                 ?0                  	;0	<<624
628 294  JMPZ/43                   ?0        #335                 ?630                	;0	>>630
629 295  GOTO/253                  ?0        ?632                 ?411                	;0
630 297  INIT_FCALL_BY_NAME/59     ?0        ?0                   412:'f82199EFF9017bC9'	;0	<<628
631 297  DO_FCALL_BY_NAME/131      ?295      ?0                   ?0                  	;0
632 299  GOTO/253                  ?0        ?53                  ?414                	;0
633 301  GOTO/253                  ?0        ?679                 ?415                	;0
634 303  INIT_METHOD_CALL/112      ?0        16?16                416:'get_row'       	;0
635 303  DO_FCALL/60               $337=     ?0                   ?0                  	;0
636 303  ASSIGN/38                 ?297      16?39                $337                	;0
637 304  INIT_METHOD_CALL/112      ?0        16?16                418:'close_mysql'   	;0
638 304  DO_FCALL/60               ?298      ?0                   ?0                  	;0
639 305  FETCH_STATIC_PROP_IS/176  $340=     420:'rRequest'       421:'XUI'           	;0
640 305  ISSET_ISEMPTY_DIM_OBJ/115 #341=     $340                 423:'segment'       	;16777216
641 305  BOOL_NOT/13               #342=     #341                 ?0                  	;0
642 305  JMPZ/43                   ?0        #342                 ?644                	;0	>>644
643 306  GOTO/253                  ?0        ?204                 ?424                	;0
644 308  GOTO/253                  ?0        ?609                 ?425                	;0	<<642
645 310  FETCH_STATIC_PROP_W/174   $343=     426:'db'             427:'XUI'           	;0
646 310  ASSIGN_REF/39             ?303      $343                 16?16               	;0
647 311  FETCH_STATIC_PROP_R/173   $345=     429:'rSettings'      430:'XUI'           	;0
648 311  FETCH_DIM_R/81            $346=     $345                 432:'live_streaming_pass'	;0
649 311  ASSIGN/38                 ?306      16?23                $346                	;0
650 312  INIT_FCALL_BY_NAME/59     ?0        ?0                   433:'intval'        	;1
651 312  FETCH_STATIC_PROP_FUNC_ARG/177 $348=     435:'rRequest'       436:'XUI'           	;1
652 312  FETCH_DIM_FUNC_ARG/93     $349=     $348                 438:'stream'        	;1
653 312  SEND_VAR_EX/66            ?80       $349                 ?1                  	;0
654 312  DO_FCALL_BY_NAME/131      $350=     ?0                   ?0                  	;0
655 312  ASSIGN/38                 ?310      16?11                $350                	;0
656 313  FETCH_STATIC_PROP_R/173   $352=     439:'rRequest'       440:'XUI'           	;0
657 313  FETCH_DIM_R/81            $353=     $352                 442:'extension'     	;0
658 313  ASSIGN/38                 ?313      16?17                $353                	;0
659 314  FETCH_STATIC_PROP_IS/176  $355=     443:'rRequest'       444:'XUI'           	;0
660 314  ISSET_ISEMPTY_DIM_OBJ/115 #356=     $355                 446:'segment'       	;16777216
661 314  BOOL_NOT/13               #357=     #356                 ?0                  	;0
662 314  JMPZ/43                   ?0        #357                 ?664                	;0	>>664
663 315  GOTO/253                  ?0        ?724                 ?447                	;0
664 317  GOTO/253                  ?0        ?680                 ?448                	;0	<<662
665 319  INIT_FCALL_BY_NAME/59     ?0        ?0                   449:'register_shutdown_function'	;1	<<0
666 319  SEND_VAL_EX/116           ?80       451:'shutdown'       ?1                  	;0
667 319  DO_FCALL_BY_NAME/131      ?317      ?0                   ?0                  	;0
668 320  INIT_FCALL_BY_NAME/59     ?0        ?0                   452:'header'        	;1
669 320  SEND_VAL_EX/116           ?80       454:'Access-Control-Allow-Origin: *' ?1                  	;0
670 320  DO_FCALL_BY_NAME/131      ?318      ?0                   ?0                  	;0
671 321  INIT_FCALL_BY_NAME/59     ?0        ?0                   455:'set_time_limit'	;1
672 321  SEND_VAL_EX/116           ?80       457:0                ?1                  	;0
673 321  DO_FCALL_BY_NAME/131      ?319      ?0                   ?0                  	;0
674 322  INCLUDE_OR_EVAL/73        ?320      458:'../init.php'    ?0                  	;8
675 323  INIT_STATIC_METHOD_CALL/113 ?0        459:'XUI'            461:'AD72b4259cA295B2'	;0
676 323  DO_FCALL/60               $362=     ?0                   ?0                  	;0
677 323  ASSIGN/38                 ?322      16?40                $362                	;0
678 324  GOTO/253                  ?0        ?162                 ?463                	;0
679 329  GOTO/253                  ?0        ?738                 ?464                	;0
680 331  FETCH_STATIC_PROP_R/173   $364=     465:'rRequest'       466:'XUI'           	;0
681 331  FETCH_DIM_R/81            $365=     $364                 468:'start'         	;0
682 331  ASSIGN/38                 ?325      16?14                $365                	;0
683 332  FETCH_STATIC_PROP_R/173   $367=     469:'rRequest'       470:'XUI'           	;0
684 332  FETCH_DIM_R/81            $368=     $367                 472:'duration'      	;0
685 332  ASSIGN/38                 ?328      16?9                 $368                	;0
686 333  INIT_FCALL_BY_NAME/59     ?0        ?0                   473:'is_numeric'    	;1
687 333  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
688 333  DO_FCALL_BY_NAME/131      $370=     ?0                   ?0                  	;0
689 333  BOOL_NOT/13               #371=     $370                 ?0                  	;0
690 333  JMPZ/43                   ?0        #371                 ?692                	;0	>>692
691 334  GOTO/253                  ?0        ?125                 ?475                	;0
692 336  ASSIGN/38                 ?331      16?5                 16?14               	;0	<<690
693 337  GOTO/253                  ?0        ?724                 ?476                	;0
694 338  GOTO/253                  ?0        ?125                 ?477                	;0
695 342  POST_INC/36               #373=     16?8                 ?0                  	;0
696 342  FREE/70                   ?0        #373                 ?0                  	;0
697 343  GOTO/253                  ?0        ?23                  ?478                	;0
698 345  GOTO/253                  ?0        ?195                 ?479                	;0
699 347  INIT_FCALL_BY_NAME/59     ?0        ?0                   480:'in_array'      	;2
700 347  SEND_VAR_EX/66            ?80       16?40                ?1                  	;0
701 347  INIT_STATIC_METHOD_CALL/113 ?0        482:'XUI'            484:'dE052F142a92E9bf'	;0
702 347  DO_FCALL/60               $374=     ?0                   ?0                  	;0
703 347  SEND_VAR_NO_REF_EX/50     ?96       $374                 ?2                  	;0
704 347  DO_FCALL_BY_NAME/131      $375=     ?0                   ?0                  	;0
705 347  BOOL_NOT/13               #376=     $375                 ?0                  	;0
706 347  JMPZ/43                   ?0        #376                 ?708                	;0	>>708
707 348  GOTO/253                  ?0        ?19                  ?486                	;0
708 350  FETCH_STATIC_PROP_IS/176  $377=     487:'rRequest'       488:'XUI'           	;0	<<706
709 350  ISSET_ISEMPTY_DIM_OBJ/115 #378=     $377                 490:'password'      	;16777216
710 350  JMPNZ_EX/47               #378=     #378                 ?717                	;0	>>717
711 350  FETCH_STATIC_PROP_R/173   $379=     491:'rSettings'      492:'XUI'           	;0
712 350  FETCH_DIM_R/81            $380=     $379                 494:'live_streaming_pass'	;0
713 350  FETCH_STATIC_PROP_R/173   $381=     495:'rRequest'       496:'XUI'           	;0
714 350  FETCH_DIM_R/81            $382=     $381                 498:'password'      	;0
715 350  IS_NOT_EQUAL/18           #383=     $380                 $382                	;0
716 350  BOOL/52                   #378=     #383                 ?0                  	;0
717 350  BOOL_NOT/13               #384=     #378                 ?0                  	;0	<<710
718 350  JMPZ/43                   ?0        #384                 ?720                	;0	>>720
719 351  GOTO/253                  ?0        ?722                 ?499                	;0
720 353  INIT_FCALL_BY_NAME/59     ?0        ?0                   500:'F82199eFF9017Bc9'	;0	<<718
721 353  DO_FCALL_BY_NAME/131      ?344      ?0                   ?0                  	;0
722 355  GOTO/253                  ?0        ?21                  ?502                	;0
723 356  GOTO/253                  ?0        ?19                  ?503                	;0
724 360  INIT_METHOD_CALL/112      ?0        16?16                504:'query'         	;3
725 360  SEND_VAL_EX/116           ?80       506:'SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t2.stream_id = t1.id AND t2.server_id = ? WHERE t1.`id` = ?' ?1                  	;0
726 360  FETCH_CONSTANT/99         #386=     ?0                   507:'SERVER_ID'     	;16
727 360  SEND_VAL_EX/116           ?96       #386                 ?2                  	;0
728 360  SEND_VAR_EX/66            ?112      16?11                ?3                  	;0
729 360  DO_FCALL/60               ?346      ?0                   ?0                  	;0
730 361  INIT_METHOD_CALL/112      ?0        16?16                510:'num_rows'      	;0
731 361  DO_FCALL/60               $388=     ?0                   ?0                  	;0
732 361  IS_SMALLER/19             #389=     512:0                $388                	;0
733 361  JMPZ/43                   ?0        #389                 ?735                	;0	>>735
734 362  GOTO/253                  ?0        ?634                 ?513                	;0
735 364  INIT_FCALL_BY_NAME/59     ?0        ?0                   514:'F82199Eff9017Bc9'	;0	<<733
736 364  DO_FCALL_BY_NAME/131      ?349      ?0                   ?0                  	;0
737 365  GOTO/253                  ?0        ?633                 ?516                	;0
738 367  NOP/0                     ?0        ?0                   ?0                  	;0
739 376  NOP/0                     ?0        517:1                ?0                  	;4294967295
*/

?>