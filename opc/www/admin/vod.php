<?php


function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   189  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   190  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
	2   190  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   190  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4   190  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5   190  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6   191  GOTO/253                  ?0        ?9                   ?3                  	;0
	7   193  INIT_METHOD_CALL/112      ?0        16?0                 4:'close_mysql'     	;0	<<5
	8   193  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	9   195  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?29                  ?0                  	;0	>>29
1   5    EXIT/79                   ?0        ?0                   ?0                  	;0
2   7    ASSIGN/38                 ?0        16?0                 16?1                	;0
3   8    ASSIGN/38                 ?1        16?2                 16?3                	;0
4   9    SUB/2                     #22=      16?2                 16?0                	;0
5   9    ADD/1                     #23=      #22                  1:1                 	;0
6   9    ASSIGN/38                 ?4        16?4                 #23                 	;0
7   10   GOTO/253                  ?0        ?8                   ?2                  	;0
8   12   INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'fseek'           	;2
9   12   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
10  12   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
11  12   DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
12  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'header'          	;1
13  13   SEND_VAL_EX/116           ?80       7:'HTTP/1.1 206 Partial Content' ?1                  	;0
14  13   DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
15  15   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'header'          	;1
16  15   ROPE_INIT/54              #28=      ?0                   10:'Content-Range: bytes '	;6
17  15   ROPE_ADD/55               #28=      #28                  16?0                	;1
18  15   ROPE_ADD/55               #28=      #28                  11:'-'              	;2
19  15   ROPE_ADD/55               #28=      #28                  16?2                	;3
20  15   ROPE_ADD/55               #28=      #28                  12:'/'              	;4
21  15   ROPE_END/56               #27=      #28                  16?6                	;5
22  15   SEND_VAL_EX/116           ?80       #27                  ?1                  	;0
23  15   DO_FCALL_BY_NAME/131      ?11       ?0                   ?0                  	;0
24  16   INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'header'         	;1
25  16   CONCAT/8                  #32=      15:'Content-Length: ' 16?4                	;0
26  16   SEND_VAL_EX/116           ?80       #32                  ?1                  	;0
27  16   DO_FCALL_BY_NAME/131      ?13       ?0                   ?0                  	;0
28  17   GOTO/253                  ?0        ?413                 ?16                 	;0
29  19   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'register_shutdown_function'	;1	<<0
30  19   SEND_VAL_EX/116           ?80       19:'shutdown'        ?1                  	;0
31  19   DO_FCALL_BY_NAME/131      ?14       ?0                   ?0                  	;0
32  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'header'         	;1
33  20   SEND_VAL_EX/116           ?80       22:'Access-Control-Allow-Origin: *' ?1                  	;0
34  20   DO_FCALL_BY_NAME/131      ?15       ?0                   ?0                  	;0
35  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'set_time_limit' 	;1
36  21   SEND_VAL_EX/116           ?80       25:0                 ?1                  	;0
37  21   DO_FCALL_BY_NAME/131      ?16       ?0                   ?0                  	;0
38  22   INCLUDE_OR_EVAL/73        ?17       26:'../init.php'     ?0                  	;8
39  23   INIT_STATIC_METHOD_CALL/113 ?0        27:'XUI'             29:'ad72b4259cA295B2'	;0
40  23   DO_FCALL/60               $38=      ?0                   ?0                  	;0
41  23   ASSIGN/38                 ?19       16?7                 $38                 	;0
42  24   GOTO/253                  ?0        ?270                 ?31                 	;0
43  26   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'header'         	;1
44  26   ROPE_INIT/54              #41=      ?0                   34:'Content-Range: bytes '	;6
45  26   ROPE_ADD/55               #41=      #41                  16?0                	;1
46  26   ROPE_ADD/55               #41=      #41                  35:'-'              	;2
47  26   ROPE_ADD/55               #41=      #41                  16?2                	;3
48  26   ROPE_ADD/55               #41=      #41                  36:'/'              	;4
49  26   ROPE_END/56               #40=      #41                  16?6                	;5
50  26   SEND_VAL_EX/116           ?80       #40                  ?1                  	;0
51  26   DO_FCALL_BY_NAME/131      ?24       ?0                   ?0                  	;0
52  27   EXIT/79                   ?0        ?0                   ?0                  	;0
53  29   IS_EQUAL/17               #45=      16?8                 37:'-'              	;0
54  29   JMPZ/43                   ?0        #45                  ?56                 	;0	>>56
55  30   GOTO/253                  ?0        ?247                 ?38                 	;0
56  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'explode'        	;2	<<54
57  32   SEND_VAL_EX/116           ?80       41:'-'               ?1                  	;0
58  32   SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
59  32   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
60  32   ASSIGN/38                 ?27       16?8                 $46                 	;0
61  33   GOTO/253                  ?0        ?231                 ?42                 	;0
62  35   ASSIGN/38                 ?28       16?1                 16?0                	;0
63  36   ASSIGN/38                 ?29       16?3                 16?2                	;0
64  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'explode'        	;3
65  37   SEND_VAL_EX/116           ?80       45:'='               ?1                  	;0
66  37   FETCH_FUNC_ARG/92         $50=      46:'_SERVER'         ?0                  	;2
67  37   FETCH_DIM_FUNC_ARG/93     $51=      $50                  47:'HTTP_RANGE'     	;2
68  37   SEND_VAR_EX/66            ?96       $51                  ?2                  	;0
69  37   SEND_VAL_EX/116           ?112      48:2                 ?3                  	;0
70  37   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
71  37   FETCH_LIST/98             $53=      $52                  49:1                	;0
72  37   ASSIGN/38                 ?34       16?8                 $53                 	;0
73  37   FREE/70                   ?0        $52                  ?0                  	;0
74  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'strpos'         	;2
75  38   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
76  38   SEND_VAL_EX/116           ?96       52:','               ?2                  	;0
77  38   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
78  38   IS_NOT_IDENTICAL/16       #56=      $55                  53:false            	;0
79  38   BOOL_NOT/13               #57=      #56                  ?0                  	;0
80  38   JMPZ/43                   ?0        #57                  ?82                 	;0	>>82
81  39   GOTO/253                  ?0        ?53                  ?54                 	;0
82  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'header'         	;1	<<80
83  41   SEND_VAL_EX/116           ?80       57:'HTTP/1.1 416 Requested Range Not Satisfiable' ?1                  	;0
84  41   DO_FCALL_BY_NAME/131      ?38       ?0                   ?0                  	;0
85  42   GOTO/253                  ?0        ?43                  ?58                 	;0
86  44   FETCH_DIM_R/81            $59=      16?10                59:'extension'      	;0
87  44   ASSIGN/38                 ?40       16?9                 $59                 	;0
88  45   INIT_METHOD_CALL/112      ?0        16?11                60:'query'          	;3
89  45   SEND_VAL_EX/116           ?80       62:'SELECT t1.* FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t2.stream_id = t1.id AND t2.pid IS NOT NULL AND t2.server_id = ? INNER JOIN `streams_types` t3 ON t3.type_id = t1.type AND t3.type_key IN (\'movie\', \'series\') WHERE t1.`id` = ?' ?1                  	;0
90  45   FETCH_CONSTANT/99         #61=      ?0                   63:'SERVER_ID'      	;16
91  45   SEND_VAL_EX/116           ?96       #61                  ?2                  	;0
92  45   SEND_VAR_EX/66            ?112      16?12                ?3                  	;0
93  45   DO_FCALL/60               ?42       ?0                   ?0                  	;0
94  46   FETCH_STATIC_PROP_R/173   $63=      66:'rSettings'       67:'XUI'            	;0
95  46   FETCH_DIM_R/81            $64=      $63                  69:'use_buffer'     	;0
96  46   IS_EQUAL/17               #65=      $64                  70:0                	;0
97  46   BOOL_NOT/13               #66=      #65                  ?0                  	;0
98  46   JMPZ/43                   ?0        #66                  ?100                	;0	>>100
99  47   GOTO/253                  ?0        ?103                 ?71                 	;0
100 49   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'header'         	;1	<<98
101 49   SEND_VAL_EX/116           ?80       74:'X-Accel-Buffering: no' ?1                  	;0
102 49   DO_FCALL_BY_NAME/131      ?47       ?0                   ?0                  	;0
103 51   GOTO/253                  ?0        ?190                 ?75                 	;0
104 53   GOTO/253                  ?0        ?107                 ?76                 	;0
105 55   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'f82199eFf9017bC9'	;0
106 55   DO_FCALL_BY_NAME/131      ?48       ?0                   ?0                  	;0
107 57   GOTO/253                  ?0        ?301                 ?79                 	;0
108 58   GOTO/253                  ?0        ?309                 ?80                 	;0
109 60   FETCH_DIM_R/81            $69=      16?13                81:'target_container'	;0
110 60   SWITCH_STRING/188         ?0        $69                  82:array (
  'mp4' => 128,
  'mkv' => 133,
  'avi' => 138,
  '3gp' => 143,
  'flv' => 148,
  'wmv' => 153,
  'mov' => 158,
  'ts' => 163,
)	;168
111 61   CASE/48                   #70=      $69                  83:'mp4'            	;0	>>113
112 61   JMPNZ/44                  ?0        #70                  ?128                	;0	>>128
113 64   CASE/48                   #70=      $69                  84:'mkv'            	;0	>>115	<<111
114 64   JMPNZ/44                  ?0        #70                  ?133                	;0	>>133
115 67   CASE/48                   #70=      $69                  85:'avi'            	;0	>>117	<<113
116 67   JMPNZ/44                  ?0        #70                  ?138                	;0	>>138
117 70   CASE/48                   #70=      $69                  86:'3gp'            	;0	>>119	<<115
118 70   JMPNZ/44                  ?0        #70                  ?143                	;0	>>143
119 73   CASE/48                   #70=      $69                  87:'flv'            	;0	>>121	<<117
120 73   JMPNZ/44                  ?0        #70                  ?148                	;0	>>148
121 76   CASE/48                   #70=      $69                  88:'wmv'            	;0	>>123	<<119
122 76   JMPNZ/44                  ?0        #70                  ?153                	;0	>>153
123 79   CASE/48                   #70=      $69                  89:'mov'            	;0	>>125	<<121
124 79   JMPNZ/44                  ?0        #70                  ?158                	;0	>>158
125 82   CASE/48                   #70=      $69                  90:'ts'             	;0	>>127	<<123
126 82   JMPNZ/44                  ?0        #70                  ?163                	;0	>>163
127 82   JMP/42                    ?0        ?168                 ?0                  	;0	>>168	<<125
128 62   INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'header'         	;1	<<112
129 62   SEND_VAL_EX/116           ?80       93:'Content-type: video/mp4' ?1                  	;0
130 62   DO_FCALL_BY_NAME/131      ?51       ?0                   ?0                  	;0
131 63   FREE/70                   ?0        $69                  ?3                  	;1
132 63   GOTO/253                  ?0        ?172                 ?94                 	;0
133 65   INIT_FCALL_BY_NAME/59     ?0        ?0                   95:'header'         	;1	<<114
134 65   SEND_VAL_EX/116           ?80       97:'Content-type: video/x-matroska' ?1                  	;0
135 65   DO_FCALL_BY_NAME/131      ?52       ?0                   ?0                  	;0
136 66   FREE/70                   ?0        $69                  ?3                  	;1
137 66   GOTO/253                  ?0        ?172                 ?98                 	;0
138 68   INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'header'         	;1	<<116
139 68   SEND_VAL_EX/116           ?80       101:'Content-type: video/x-msvideo' ?1                  	;0
140 68   DO_FCALL_BY_NAME/131      ?53       ?0                   ?0                  	;0
141 69   FREE/70                   ?0        $69                  ?3                  	;1
142 69   GOTO/253                  ?0        ?172                 ?102                	;0
143 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   103:'header'        	;1	<<118
144 71   SEND_VAL_EX/116           ?80       105:'Content-type: video/3gpp' ?1                  	;0
145 71   DO_FCALL_BY_NAME/131      ?54       ?0                   ?0                  	;0
146 72   FREE/70                   ?0        $69                  ?3                  	;1
147 72   GOTO/253                  ?0        ?172                 ?106                	;0
148 74   INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'header'        	;1	<<120
149 74   SEND_VAL_EX/116           ?80       109:'Content-type: video/x-flv' ?1                  	;0
150 74   DO_FCALL_BY_NAME/131      ?55       ?0                   ?0                  	;0
151 75   FREE/70                   ?0        $69                  ?3                  	;1
152 75   GOTO/253                  ?0        ?172                 ?110                	;0
153 77   INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'header'        	;1	<<122
154 77   SEND_VAL_EX/116           ?80       113:'Content-type: video/x-ms-wmv' ?1                  	;0
155 77   DO_FCALL_BY_NAME/131      ?56       ?0                   ?0                  	;0
156 78   FREE/70                   ?0        $69                  ?3                  	;1
157 78   GOTO/253                  ?0        ?172                 ?114                	;0
158 80   INIT_FCALL_BY_NAME/59     ?0        ?0                   115:'header'        	;1	<<124
159 80   SEND_VAL_EX/116           ?80       117:'Content-type: video/quicktime' ?1                  	;0
160 80   DO_FCALL_BY_NAME/131      ?57       ?0                   ?0                  	;0
161 81   FREE/70                   ?0        $69                  ?3                  	;1
162 81   GOTO/253                  ?0        ?172                 ?118                	;0
163 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   119:'header'        	;1	<<126
164 83   SEND_VAL_EX/116           ?80       121:'Content-type: video/mp2t' ?1                  	;0
165 83   DO_FCALL_BY_NAME/131      ?58       ?0                   ?0                  	;0
166 84   FREE/70                   ?0        $69                  ?3                  	;1
167 84   GOTO/253                  ?0        ?172                 ?122                	;0
168 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   123:'header'        	;1	<<127
169 86   SEND_VAL_EX/116           ?80       125:'Content-Type: application/octet-stream' ?1                  	;0
170 86   DO_FCALL_BY_NAME/131      ?59       ?0                   ?0                  	;0
171 86   FREE/70                   ?0        $69                  ?0                  	;0
172 90   BEGIN_SILENCE/57          #80=      ?0                   ?0                  	;0
173 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   126:'fopen'         	;2
174 90   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
175 90   SEND_VAL_EX/116           ?96       128:'rb'             ?2                  	;0
176 90   DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
177 90   END_SILENCE/58            ?0        #80                  ?0                  	;0
178 90   ASSIGN/38                 ?62       16?5                 $81                 	;0
179 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   129:'filesize'      	;1
180 91   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
181 91   DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
182 91   ASSIGN/38                 ?64       16?6                 $83                 	;0
183 92   GOTO/253                  ?0        ?254                 ?131                	;0
184 94   GOTO/253                  ?0        ?414                 ?132                	;0
185 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'fclose'        	;1
186 96   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
187 96   DO_FCALL_BY_NAME/131      ?65       ?0                   ?0                  	;0
188 97   EXIT/79                   ?0        ?0                   ?0                  	;0
189 99   GOTO/253                  ?0        ?269                 ?135                	;0
190 101  INIT_METHOD_CALL/112      ?0        16?11                136:'num_rows'      	;0
191 101  DO_FCALL/60               $86=      ?0                   ?0                  	;0
192 101  IS_SMALLER/19             #87=      138:0                $86                 	;0
193 101  BOOL_NOT/13               #88=      #87                  ?0                  	;0
194 101  JMPZ/43                   ?0        #88                  ?196                	;0	>>196
195 102  GOTO/253                  ?0        ?269                 ?139                	;0
196 104  INIT_METHOD_CALL/112      ?0        16?11                140:'get_row'       	;0	<<194
197 104  DO_FCALL/60               $89=      ?0                   ?0                  	;0
198 104  ASSIGN/38                 ?70       16?13                $89                 	;0
199 105  INIT_METHOD_CALL/112      ?0        16?11                142:'close_mysql'   	;0
200 105  DO_FCALL/60               ?71       ?0                   ?0                  	;0
201 106  FETCH_CONSTANT/99         #92=      ?0                   144:'VOD_PATH'      	;16
202 106  CONCAT/8                  #93=      #92                  16?12               	;0
203 106  CONCAT/8                  #94=      #93                  147:'.'             	;0
204 106  CONCAT/8                  #95=      #94                  16?9                	;0
205 106  ASSIGN/38                 ?76       16?14                #95                 	;0
206 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'file_exists'   	;1
207 107  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
208 107  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
209 107  BOOL_NOT/13               #98=      $97                  ?0                  	;0
210 107  JMPZ/43                   ?0        #98                  ?212                	;0	>>212
211 108  GOTO/253                  ?0        ?189                 ?150                	;0
212 110  GOTO/253                  ?0        ?109                 ?151                	;0	<<210
213 113  NEW/68                    $99=      152:'Database'       ?96                 	;1
214 113  SEND_VAL_EX/116           ?80       154:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
215 113  DO_FCALL/60               ?80       ?8                   ?0                  	;0
216 113  ASSIGN/38                 ?81       16?11                $99                 	;0
217 114  FETCH_STATIC_PROP_W/174   $102=     155:'db'             156:'XUI'           	;0
218 114  ASSIGN_REF/39             ?83       $102                 16?11               	;0
219 115  INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'pathinfo'      	;1
220 115  FETCH_STATIC_PROP_FUNC_ARG/177 $104=     160:'rRequest'       161:'XUI'           	;1
221 115  FETCH_DIM_FUNC_ARG/93     $105=     $104                 163:'stream'        	;1
222 115  SEND_VAR_EX/66            ?80       $105                 ?1                  	;0
223 115  DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
224 115  ASSIGN/38                 ?87       16?10                $106                	;0
225 116  INIT_FCALL_BY_NAME/59     ?0        ?0                   164:'intval'        	;1
226 116  FETCH_DIM_FUNC_ARG/93     $108=     16?10                166:'filename'      	;1
227 116  SEND_VAR_EX/66            ?80       $108                 ?1                  	;0
228 116  DO_FCALL_BY_NAME/131      $109=     ?0                   ?0                  	;0
229 116  ASSIGN/38                 ?90       16?12                $109                	;0
230 117  GOTO/253                  ?0        ?86                  ?167                	;0
231 119  FETCH_DIM_R/81            $111=     16?8                 168:0               	;0
232 119  ASSIGN/38                 ?92       16?1                 $111                	;0
233 120  ISSET_ISEMPTY_DIM_OBJ/115 #113=     16?8                 169:1               	;33554432
234 120  JMPZ_EX/46                #113=     #113                 ?240                	;0	>>240
235 120  INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'is_numeric'    	;1
236 120  FETCH_DIM_FUNC_ARG/93     $114=     16?8                 172:1               	;1
237 120  SEND_VAR_EX/66            ?80       $114                 ?1                  	;0
238 120  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
239 120  BOOL/52                   #113=     $115                 ?0                  	;0
240 120  JMPZ/43                   ?0        #113                 ?244                	;0	>>244	<<234
241 120  FETCH_DIM_R/81            $116=     16?8                 173:1               	;0
242 120  QM_ASSIGN/22              #117=     $116                 ?0                  	;0
243 120  JMP/42                    ?0        ?245                 ?0                  	;0	>>245
244 120  QM_ASSIGN/22              #117=     16?6                 ?0                  	;0	<<240
245 120  ASSIGN/38                 ?98       16?3                 #117                	;0	<<243
246 121  GOTO/253                  ?0        ?383                 ?174                	;0
247 123  INIT_FCALL_BY_NAME/59     ?0        ?0                   175:'substr'        	;2
248 123  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
249 123  SEND_VAL_EX/116           ?96       177:1                ?2                  	;0
250 123  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
251 123  SUB/2                     #120=     16?6                 $119                	;0
252 123  ASSIGN/38                 ?101      16?1                 #120                	;0
253 124  GOTO/253                  ?0        ?383                 ?178                	;0
254 126  ASSIGN/38                 ?102      16?4                 16?6                	;0
255 127  ASSIGN/38                 ?103      16?0                 179:0               	;0
256 128  SUB/2                     #124=     16?6                 180:1               	;0
257 128  ASSIGN/38                 ?105      16?2                 #124                	;0
258 129  INIT_FCALL_BY_NAME/59     ?0        ?0                   181:'header'        	;1
259 129  NOP/0                     ?0        ?0                   ?0                  	;0
260 129  FAST_CONCAT/53            #126=     183:'Accept-Ranges: 0-' 16?4                	;0
261 129  SEND_VAL_EX/116           ?80       #126                 ?1                  	;0
262 129  DO_FCALL_BY_NAME/131      ?107      ?0                   ?0                  	;0
263 130  FETCH_IS/89               $128=     184:'_SERVER'        ?0                  	;0
264 130  ISSET_ISEMPTY_DIM_OBJ/115 #129=     $128                 185:'HTTP_RANGE'    	;33554432
265 130  BOOL_NOT/13               #130=     #129                 ?0                  	;0
266 130  JMPZ/43                   ?0        #130                 ?268                	;0	>>268
267 131  GOTO/253                  ?0        ?15                  ?186                	;0
268 133  GOTO/253                  ?0        ?62                  ?187                	;0	<<266
269 136  GOTO/253                  ?0        ?435                 ?188                	;0
270 138  FETCH_STATIC_PROP_IS/176  $131=     189:'rRequest'       190:'XUI'           	;0
271 138  ISSET_ISEMPTY_DIM_OBJ/115 #132=     $131                 192:'uitoken'       	;16777216
272 138  BOOL_NOT/13               #133=     #132                 ?0                  	;0
273 138  JMPZ/43                   ?0        #133                 ?275                	;0	>>275
274 139  GOTO/253                  ?0        ?309                 ?193                	;0
275 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   194:'in_array'      	;2	<<273
276 141  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
277 141  INIT_STATIC_METHOD_CALL/113 ?0        196:'XUI'            198:'de052F142A92E9Bf'	;0
278 141  DO_FCALL/60               $134=     ?0                   ?0                  	;0
279 141  SEND_VAR_NO_REF_EX/50     ?96       $134                 ?2                  	;0
280 141  DO_FCALL_BY_NAME/131      $135=     ?0                   ?0                  	;0
281 141  BOOL_NOT/13               #136=     $135                 ?0                  	;0
282 141  JMPZ/43                   ?0        #136                 ?284                	;0	>>284
283 142  GOTO/253                  ?0        ?105                 ?200                	;0
284 144  FETCH_STATIC_PROP_IS/176  $137=     201:'rRequest'       202:'XUI'           	;0	<<282
285 144  ISSET_ISEMPTY_DIM_OBJ/115 #138=     $137                 204:'password'      	;16777216
286 144  JMPNZ_EX/47               #138=     #138                 ?293                	;0	>>293
287 144  FETCH_STATIC_PROP_R/173   $139=     205:'rSettings'      206:'XUI'           	;0
288 144  FETCH_DIM_R/81            $140=     $139                 208:'live_streaming_pass'	;0
289 144  FETCH_STATIC_PROP_R/173   $141=     209:'rRequest'       210:'XUI'           	;0
290 144  FETCH_DIM_R/81            $142=     $141                 212:'password'      	;0
291 144  IS_NOT_EQUAL/18           #143=     $140                 $142                	;0
292 144  BOOL/52                   #138=     #143                 ?0                  	;0
293 144  BOOL_NOT/13               #144=     #138                 ?0                  	;0	<<286
294 144  JMPZ/43                   ?0        #144                 ?296                	;0	>>296
295 145  GOTO/253                  ?0        ?298                 ?213                	;0
296 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   214:'F82199EFf9017bc9'	;0	<<294
297 147  DO_FCALL_BY_NAME/131      ?125      ?0                   ?0                  	;0
298 149  GOTO/253                  ?0        ?104                 ?216                	;0
299 151  INIT_FCALL_BY_NAME/59     ?0        ?0                   217:'f82199EFf9017Bc9'	;0
300 151  DO_FCALL_BY_NAME/131      ?126      ?0                   ?0                  	;0
301 154  FETCH_STATIC_PROP_IS/176  $147=     219:'rRequest'       220:'XUI'           	;0
302 154  ISSET_ISEMPTY_DIM_OBJ/115 #148=     $147                 222:'stream'        	;16777216
303 154  BOOL_NOT/13               #149=     #148                 ?0                  	;0
304 154  JMPZ/43                   ?0        #149                 ?306                	;0	>>306
305 155  GOTO/253                  ?0        ?213                 ?223                	;0
306 157  INIT_FCALL_BY_NAME/59     ?0        ?0                   224:'F82199EFf9017BC9'	;0	<<304
307 157  DO_FCALL_BY_NAME/131      ?130      ?0                   ?0                  	;0
308 158  GOTO/253                  ?0        ?213                 ?226                	;0
309 161  INIT_FCALL_BY_NAME/59     ?0        ?0                   227:'json_decode'   	;2
310 161  INIT_STATIC_METHOD_CALL/113 ?0        229:'Xui\\Functions' 231:'decrypt'       	;3
311 161  FETCH_STATIC_PROP_FUNC_ARG/177 $151=     233:'rRequest'       234:'XUI'           	;1
312 161  FETCH_DIM_FUNC_ARG/93     $152=     $151                 236:'uitoken'       	;1
313 161  SEND_VAR_EX/66            ?80       $152                 ?1                  	;0
314 161  FETCH_STATIC_PROP_FUNC_ARG/177 $153=     237:'rSettings'      238:'XUI'           	;2
315 161  FETCH_DIM_FUNC_ARG/93     $154=     $153                 240:'live_streaming_pass'	;2
316 161  SEND_VAR_EX/66            ?96       $154                 ?2                  	;0
317 161  FETCH_CONSTANT/99         #155=     ?0                   241:'OPENSSL_EXTRA' 	;16
318 161  SEND_VAL_EX/116           ?112      #155                 ?3                  	;0
319 161  DO_FCALL/60               $156=     ?0                   ?0                  	;0
320 161  SEND_VAR_NO_REF_EX/50     ?80       $156                 ?1                  	;0
321 161  SEND_VAL_EX/116           ?96       244:true             ?2                  	;0
322 161  DO_FCALL_BY_NAME/131      $157=     ?0                   ?0                  	;0
323 161  ASSIGN/38                 ?138      16?15                $157                	;0
324 162  FETCH_DIM_R/81            $161=     16?15                249:'stream_id'     	;0
325 162  CONCAT/8                  #162=     $161                 250:'.'             	;0
326 162  FETCH_DIM_R/81            $163=     16?15                251:'container'     	;0
327 162  CONCAT/8                  #164=     #162                 $163                	;0
328 162  FETCH_STATIC_PROP_W/174   $159=     245:'rRequest'       246:'XUI'           	;0
329 162  ASSIGN_DIM/147            ?140      $159                 248:'stream'        	;0
330 162  OP_DATA/137               ?0        #164                 ?0                  	;0
331 163  FETCH_STATIC_PROP_R/173   $165=     252:'rSettings'      253:'XUI'           	;0
332 163  FETCH_DIM_R/81            $166=     $165                 255:'ip_subnet_match'	;0
333 163  JMPZ/43                   ?0        $166                 ?366                	;0	>>366
334 163  INIT_FCALL_BY_NAME/59     ?0        ?0                   256:'implode'       	;2
335 163  SEND_VAL_EX/116           ?80       258:'.'              ?1                  	;0
336 163  INIT_FCALL_BY_NAME/59     ?0        ?0                   259:'array_slice'   	;3
337 163  INIT_FCALL_BY_NAME/59     ?0        ?0                   261:'explode'       	;2
338 163  SEND_VAL_EX/116           ?80       263:'.'              ?1                  	;0
339 163  FETCH_DIM_FUNC_ARG/93     $167=     16?15                264:'ip'            	;2
340 163  SEND_VAR_EX/66            ?96       $167                 ?2                  	;0
341 163  DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
342 163  SEND_VAR_NO_REF_EX/50     ?80       $168                 ?1                  	;0
343 163  SEND_VAL_EX/116           ?96       265:0                ?2                  	;0
344 163  SEND_VAL_EX/116           ?112      266:-1               ?3                  	;0
345 163  DO_FCALL_BY_NAME/131      $169=     ?0                   ?0                  	;0
346 163  SEND_VAR_NO_REF_EX/50     ?96       $169                 ?2                  	;0
347 163  DO_FCALL_BY_NAME/131      $170=     ?0                   ?0                  	;0
348 163  INIT_FCALL_BY_NAME/59     ?0        ?0                   267:'implode'       	;2
349 163  SEND_VAL_EX/116           ?80       269:'.'              ?1                  	;0
350 163  INIT_FCALL_BY_NAME/59     ?0        ?0                   270:'array_slice'   	;3
351 163  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'explode'       	;2
352 163  SEND_VAL_EX/116           ?80       274:'.'              ?1                  	;0
353 163  INIT_STATIC_METHOD_CALL/113 ?0        275:'XUI'            277:'aD72B4259Ca295B2'	;0
354 163  DO_FCALL/60               $171=     ?0                   ?0                  	;0
355 163  SEND_VAR_NO_REF_EX/50     ?96       $171                 ?2                  	;0
356 163  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
357 163  SEND_VAR_NO_REF_EX/50     ?80       $172                 ?1                  	;0
358 163  SEND_VAL_EX/116           ?96       279:0                ?2                  	;0
359 163  SEND_VAL_EX/116           ?112      280:-1               ?3                  	;0
360 163  DO_FCALL_BY_NAME/131      $173=     ?0                   ?0                  	;0
361 163  SEND_VAR_NO_REF_EX/50     ?96       $173                 ?2                  	;0
362 163  DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
363 163  IS_EQUAL/17               #175=     $170                 $174                	;0
364 163  QM_ASSIGN/22              #176=     #175                 ?0                  	;0
365 163  JMP/42                    ?0        ?371                 ?0                  	;0	>>371
366 163  FETCH_DIM_R/81            $177=     16?15                281:'ip'            	;0	<<333
367 163  INIT_STATIC_METHOD_CALL/113 ?0        282:'XUI'            284:'Ad72B4259Ca295b2'	;0
368 163  DO_FCALL/60               $178=     ?0                   ?0                  	;0
369 163  IS_EQUAL/17               #179=     $177                 $178                	;0
370 163  QM_ASSIGN/22              #176=     #179                 ?0                  	;0
371 163  ASSIGN/38                 ?160      16?16                #176                	;0	<<365
372 164  FETCH_DIM_R/81            $181=     16?15                286:'expires'       	;0
373 164  INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'time'          	;0
374 164  DO_FCALL_BY_NAME/131      $182=     ?0                   ?0                  	;0
375 164  IS_SMALLER/19             #183=     $181                 $182                	;0
376 164  JMPNZ_EX/47               #183=     #183                 ?379                	;0	>>379
377 164  BOOL_NOT/13               #184=     16?16                ?0                  	;0
378 164  BOOL/52                   #183=     #184                 ?0                  	;0
379 164  BOOL_NOT/13               #185=     #183                 ?0                  	;0	<<376
380 164  JMPZ/43                   ?0        #185                 ?382                	;0	>>382
381 165  GOTO/253                  ?0        ?301                 ?289                	;0
382 167  GOTO/253                  ?0        ?299                 ?290                	;0	<<380
383 170  IS_SMALLER/19             #186=     16?2                 16?3                	;0
384 170  JMPZ/43                   ?0        #186                 ?387                	;0	>>387
385 170  QM_ASSIGN/22              #187=     16?2                 ?0                  	;0
386 170  JMP/42                    ?0        ?388                 ?0                  	;0	>>388
387 170  QM_ASSIGN/22              #187=     16?3                 ?0                  	;0	<<384
388 170  ASSIGN/38                 ?168      16?3                 #187                	;0	<<386
389 171  IS_SMALLER/19             #189=     16?3                 16?1                	;0
390 171  JMPNZ_EX/47               #189=     #189                 ?394                	;0	>>394
391 171  SUB/2                     #190=     16?6                 291:1               	;0
392 171  IS_SMALLER/19             #191=     #190                 16?1                	;0
393 171  BOOL/52                   #189=     #191                 ?0                  	;0
394 171  JMPNZ_EX/47               #189=     #189                 ?397                	;0	>>397	<<390
395 171  IS_SMALLER_OR_EQUAL/20    #192=     16?6                 16?3                	;0
396 171  BOOL/52                   #189=     #192                 ?0                  	;0
397 171  BOOL_NOT/13               #193=     #189                 ?0                  	;0	<<394
398 171  JMPZ/43                   ?0        #193                 ?400                	;0	>>400
399 172  GOTO/253                  ?0        ?2                   ?292                	;0
400 174  INIT_FCALL_BY_NAME/59     ?0        ?0                   293:'header'        	;1	<<398
401 174  SEND_VAL_EX/116           ?80       295:'HTTP/1.1 416 Requested Range Not Satisfiable' ?1                  	;0
402 174  DO_FCALL_BY_NAME/131      ?174      ?0                   ?0                  	;0
403 175  INIT_FCALL_BY_NAME/59     ?0        ?0                   296:'header'        	;1
404 175  ROPE_INIT/54              #196=     ?0                   298:'Content-Range: bytes '	;6
405 175  ROPE_ADD/55               #196=     #196                 16?0                	;1
406 175  ROPE_ADD/55               #196=     #196                 299:'-'             	;2
407 175  ROPE_ADD/55               #196=     #196                 16?2                	;3
408 175  ROPE_ADD/55               #196=     #196                 300:'/'             	;4
409 175  ROPE_END/56               #195=     #196                 16?6                	;5
410 175  SEND_VAL_EX/116           ?80       #195                 ?1                  	;0
411 175  DO_FCALL_BY_NAME/131      ?179      ?0                   ?0                  	;0
412 176  GOTO/253                  ?0        ?1                   ?301                	;0
413 178  ASSIGN/38                 ?180      16?17                302:8192            	;0
414 180  INIT_FCALL_BY_NAME/59     ?0        ?0                   303:'feof'          	;1
415 180  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
416 180  DO_FCALL_BY_NAME/131      $201=     ?0                   ?0                  	;0
417 180  BOOL_NOT/13               #202=     $201                 ?0                  	;0
418 180  JMPZ_EX/46                #202=     #202                 ?425                	;0	>>425
419 180  INIT_FCALL_BY_NAME/59     ?0        ?0                   305:'ftell'         	;1
420 180  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
421 180  DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
422 180  ASSIGN/38                 $204=     16?18                $203                	;0
423 180  IS_SMALLER_OR_EQUAL/20    #205=     $204                 16?2                	;0
424 180  BOOL/52                   #202=     #205                 ?0                  	;0
425 180  BOOL_NOT/13               #206=     #202                 ?0                  	;0	<<418
426 180  JMPZ/43                   ?0        #206                 ?428                	;0	>>428
427 181  GOTO/253                  ?0        ?185                 ?307                	;0
428 183  INIT_FCALL_BY_NAME/59     ?0        ?0                   308:'stream_get_line'	;2	<<426
429 183  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
430 183  SEND_VAR_EX/66            ?96       16?17                ?2                  	;0
431 183  DO_FCALL_BY_NAME/131      $207=     ?0                   ?0                  	;0
432 183  ASSIGN/38                 ?188      16?19                $207                	;0
433 184  ECHO/40                   ?0        16?19                ?0                  	;0
434 185  GOTO/253                  ?0        ?184                 ?310                	;0
435 187  NOP/0                     ?0        ?0                   ?0                  	;0
436 196  NOP/0                     ?0        311:1                ?0                  	;4294967295
*/

?>