<?php


function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   190  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   191  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
	2   191  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   191  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4   191  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5   191  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6   192  GOTO/253                  ?0        ?9                   ?3                  	;0
	7   194  INIT_METHOD_CALL/112      ?0        16?0                 4:'close_mysql'     	;0	<<5
	8   194  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	9   196  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?443                 ?0                  	;0	>>443
1   7    GOTO/253                  ?0        ?473                 ?1                  	;0
2   9    NEW/68                    $18=      2:'Database'         ?96                 	;1
3   9    SEND_VAL_EX/116           ?80       4:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
4   9    DO_FCALL/60               ?1        ?8                   ?0                  	;0
5   9    ASSIGN/38                 ?2        16?0                 $18                 	;0
6   10   FETCH_STATIC_PROP_W/174   $21=      5:'db'               6:'XUI'             	;0
7   10   ASSIGN_REF/39             ?4        $21                  16?0                	;0
8   11   FETCH_STATIC_PROP_IS/176  $23=      8:'rRequest'         9:'XUI'             	;0
9   11   ISSET_ISEMPTY_DIM_OBJ/115 #24=      $23                  11:'action'         	;16777216
10  11   BOOL_NOT/13               #25=      #24                  ?0                  	;0
11  11   JMPZ/43                   ?0        #25                  ?16                 	;0	>>16
12  11   FETCH_STATIC_PROP_R/173   $26=      12:'rRequest'        13:'XUI'            	;0
13  11   FETCH_DIM_R/81            $27=      $26                  15:'action'         	;0
14  11   QM_ASSIGN/22              #28=      $27                  ?0                  	;0
15  11   JMP/42                    ?0        ?17                  ?0                  	;0	>>17
16  11   QM_ASSIGN/22              #28=      16:''                ?0                  	;0	<<11
17  11   ASSIGN/38                 ?11       16?1                 #28                 	;0	<<15
18  12   FETCH_STATIC_PROP_IS/176  $30=      17:'rRequest'        18:'XUI'            	;0
19  12   ISSET_ISEMPTY_DIM_OBJ/115 #31=      $30                  20:'sub'            	;16777216
20  12   BOOL_NOT/13               #32=      #31                  ?0                  	;0
21  12   JMPZ/43                   ?0        #32                  ?26                 	;0	>>26
22  12   FETCH_STATIC_PROP_R/173   $33=      21:'rRequest'        22:'XUI'            	;0
23  12   FETCH_DIM_R/81            $34=      $33                  24:'sub'            	;0
24  12   QM_ASSIGN/22              #35=      $34                  ?0                  	;0
25  12   JMP/42                    ?0        ?27                  ?0                  	;0	>>27
26  12   QM_ASSIGN/22              #35=      25:''                ?0                  	;0	<<21
27  12   ASSIGN/38                 ?18       16?2                 #35                 	;0	<<25
28  13   SWITCH_STRING/188         ?0        16?1                 26:array (
  'server' => 40,
  'vod' => 69,
  'stream' => 176,
  'line' => 356,
  'reg_user' => 409,
)	;424
29  14   CASE/48                   #37=      16?1                 27:'server'         	;0	>>31
30  14   JMPNZ/44                  ?0        #37                  ?40                 	;0	>>40
31  29   CASE/48                   #37=      16?1                 28:'vod'            	;0	>>33	<<29
32  29   JMPNZ/44                  ?0        #37                  ?69                 	;0	>>69
33  60   CASE/48                   #37=      16?1                 29:'stream'         	;0	>>35	<<31
34  60   JMPNZ/44                  ?0        #37                  ?176                	;0	>>176
35  122  CASE/48                   #37=      16?1                 30:'line'           	;0	>>37	<<33
36  122  JMPNZ/44                  ?0        #37                  ?356                	;0	>>356
37  156  CASE/48                   #37=      16?1                 31:'reg_user'       	;0	>>39	<<35
38  156  JMPNZ/44                  ?0        #37                  ?409                	;0	>>409
39  156  JMP/42                    ?0        ?424                 ?0                  	;0	>>424	<<37
40  16   CASE/48                   #38=      16?2                 32:'list'           	;0	>>42	<<30
41  16   JMPNZ/44                  ?0        #38                  ?43                 	;0	>>43
42  16   JMP/42                    ?0        ?68                  ?0                  	;0	>>68	<<40
43  17   ASSIGN/38                 ?21       16?3                 33:array (
)        	;0	<<41
44  18   FETCH_STATIC_PROP_R/173   $40=      34:'rServers'        35:'XUI'            	;0
45  18   FE_RESET_R/77             $41=      $40                  ?62                 	;0
46  18   FE_FETCH_R/78             #42=      $41                  16?4                	;62	>>62	<<61
47  18   ASSIGN/38                 ?25       16?5                 #42                 	;0
48  19   INIT_ARRAY/71             #45=      16?5                 37:'id'             	;18
49  19   FETCH_DIM_R/81            $46=      16?4                 38:'server_name'    	;0
50  19   ADD_ARRAY_ELEMENT/72      #45=      $46                  39:'server_name'    	;0
51  19   FETCH_DIM_R/81            $47=      16?4                 40:'server_online'  	;0
52  19   ADD_ARRAY_ELEMENT/72      #45=      $47                  41:'online'         	;0
53  19   INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'json_decode'    	;2
54  19   FETCH_DIM_FUNC_ARG/93     $48=      16?4                 44:'server_hardware'	;1
55  19   SEND_VAR_EX/66            ?80       $48                  ?1                  	;0
56  19   SEND_VAL_EX/116           ?96       45:true              ?2                  	;0
57  19   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
58  19   ADD_ARRAY_ELEMENT/72      #45=      $49                  46:'info'           	;0
59  19   ASSIGN_DIM/147            ?26       16?3                 ?2670193616         	;0
60  19   OP_DATA/137               ?0        #45                  ?0                  	;0
61  20   JMP/42                    ?0        ?46                  ?0                  	;0	>>46
62  20   FE_FREE/127               ?0        $41                  ?0                  	;0	<<45
63  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'json_encode'    	;1
64  23   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
65  23   DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
66  23   ECHO/40                   ?0        $50                  ?0                  	;0
67  24   GOTO/253                  ?0        ?68                  ?49                 	;0
68  28   GOTO/253                  ?0        ?1                   ?50                 	;0	<<42
69  30   SWITCH_STRING/188         ?0        16?2                 51:array (
  'start' => 75,
  'stop' => 128,
)	;175	<<32
70  31   CASE/48                   #51=      16?2                 52:'start'          	;0	>>72
71  31   JMPNZ/44                  ?0        #51                  ?75                 	;0	>>75
72  44   CASE/48                   #51=      16?2                 53:'stop'           	;0	>>74	<<70
73  44   JMPNZ/44                  ?0        #51                  ?128                	;0	>>128
74  44   JMP/42                    ?0        ?175                 ?0                  	;0	>>175	<<72
75  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'array_map'      	;2	<<71
76  32   SEND_VAL_EX/116           ?80       56:'intval'          ?1                  	;0
77  32   FETCH_STATIC_PROP_FUNC_ARG/177 $52=      57:'rRequest'        58:'XUI'            	;2
78  32   FETCH_DIM_FUNC_ARG/93     $53=      $52                  60:'stream_ids'     	;2
79  32   SEND_VAR_EX/66            ?96       $53                  ?2                  	;0
80  32   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
81  32   ASSIGN/38                 ?37       16?6                 $54                 	;0
82  33   FETCH_STATIC_PROP_R/173   $56=      61:'rRequest'        62:'XUI'            	;0
83  33   FETCH_DIM_R/81            $57=      $56                  64:'force'          	;0
84  33   JMP_SET/152               #58=      $57                  ?86                 	;0
85  33   QM_ASSIGN/22              #58=      65:false             ?0                  	;0
86  33   ASSIGN/38                 ?41       16?7                 #58                 	;0
87  34   FETCH_STATIC_PROP_IS/176  $60=      66:'rRequest'        67:'XUI'            	;0
88  34   ISSET_ISEMPTY_DIM_OBJ/115 #61=      $60                  69:'servers'        	;16777216
89  34   JMPZ/43                   ?0        #61                  ?96                 	;0	>>96
90  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'array_keys'     	;1
91  34   FETCH_STATIC_PROP_FUNC_ARG/177 $62=      72:'rServers'        73:'XUI'            	;1
92  34   SEND_VAR_EX/66            ?80       $62                  ?1                  	;0
93  34   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
94  34   QM_ASSIGN/22              #64=      $63                  ?0                  	;0
95  34   JMP/42                    ?0        ?103                 ?0                  	;0	>>103
96  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'array_map'      	;2	<<89
97  34   SEND_VAL_EX/116           ?80       77:'intval'          ?1                  	;0
98  34   FETCH_STATIC_PROP_FUNC_ARG/177 $65=      78:'rRequest'        79:'XUI'            	;2
99  34   FETCH_DIM_FUNC_ARG/93     $66=      $65                  81:'servers'        	;2
100 34   SEND_VAR_EX/66            ?96       $66                  ?2                  	;0
101 34   DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
102 34   QM_ASSIGN/22              #64=      $67                  ?0                  	;0
103 34   ASSIGN/38                 ?50       16?8                 #64                 	;0	<<95
104 35   ASSIGN/38                 ?51       16?9                 82:array (
)        	;0
105 36   FE_RESET_R/77             $70=      16?8                 ?119                	;0
106 36   FE_FETCH_R/78             ?0        $70                  16?5                	;119	>>119	<<118
107 37   FETCH_STATIC_PROP_R/173   $72=      83:'rServers'        84:'XUI'            	;0
108 37   FETCH_DIM_R/81            $73=      $72                  16?5                	;0
109 37   FETCH_DIM_R/81            $74=      $73                  86:'api_url_ip'     	;0
110 37   CONCAT/8                  #75=      $74                  87:'&action=vod'    	;0
111 37   INIT_ARRAY/71             #76=      #75                  88:'url'            	;10
112 37   INIT_ARRAY/71             #77=      16?2                 89:'function'       	;14
113 37   ADD_ARRAY_ELEMENT/72      #77=      16?6                 90:'stream_ids'     	;0
114 37   ADD_ARRAY_ELEMENT/72      #77=      16?7                 91:'force'          	;0
115 37   ADD_ARRAY_ELEMENT/72      #76=      #77                  92:'postdata'       	;0
116 37   ASSIGN_DIM/147            ?53       16?9                 16?5                	;0
117 37   OP_DATA/137               ?0        #76                  ?0                  	;0
118 38   JMP/42                    ?0        ?106                 ?0                  	;0	>>106
119 38   FE_FREE/127               ?0        $70                  ?0                  	;0	<<105
120 41   INIT_STATIC_METHOD_CALL/113 ?0        93:'XUI'             95:'B2EF9C6C7aFa4EEc'	;1
121 41   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
122 41   DO_FCALL/60               ?60       ?0                   ?0                  	;0
123 42   INIT_FCALL_BY_NAME/59     ?0        ?0                   97:'json_encode'    	;1
124 42   SEND_VAL_EX/116           ?80       99:array (
  'result' => true,
) ?1                  	;0
125 42   DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
126 42   ECHO/40                   ?0        $79                  ?0                  	;0
127 43   EXIT/79                   ?0        ?0                   ?0                  	;0
128 45   INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'array_map'     	;2	<<73
129 45   SEND_VAL_EX/116           ?80       102:'intval'         ?1                  	;0
130 45   FETCH_STATIC_PROP_FUNC_ARG/177 $80=      103:'rRequest'       104:'XUI'           	;2
131 45   FETCH_DIM_FUNC_ARG/93     $81=      $80                  106:'stream_ids'    	;2
132 45   SEND_VAR_EX/66            ?96       $81                  ?2                  	;0
133 45   DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
134 45   ASSIGN/38                 ?65       16?6                 $82                 	;0
135 46   FETCH_STATIC_PROP_IS/176  $84=      107:'rRequest'       108:'XUI'           	;0
136 46   ISSET_ISEMPTY_DIM_OBJ/115 #85=      $84                  110:'servers'       	;16777216
137 46   JMPZ/43                   ?0        #85                  ?144                	;0	>>144
138 46   INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'array_keys'    	;1
139 46   FETCH_STATIC_PROP_FUNC_ARG/177 $86=      113:'rServers'       114:'XUI'           	;1
140 46   SEND_VAR_EX/66            ?80       $86                  ?1                  	;0
141 46   DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
142 46   QM_ASSIGN/22              #88=      $87                  ?0                  	;0
143 46   JMP/42                    ?0        ?151                 ?0                  	;0	>>151
144 46   INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'array_map'     	;2	<<137
145 46   SEND_VAL_EX/116           ?80       118:'intval'         ?1                  	;0
146 46   FETCH_STATIC_PROP_FUNC_ARG/177 $89=      119:'rRequest'       120:'XUI'           	;2
147 46   FETCH_DIM_FUNC_ARG/93     $90=      $89                  122:'servers'       	;2
148 46   SEND_VAR_EX/66            ?96       $90                  ?2                  	;0
149 46   DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
150 46   QM_ASSIGN/22              #88=      $91                  ?0                  	;0
151 46   ASSIGN/38                 ?74       16?8                 #88                 	;0	<<143
152 47   ASSIGN/38                 ?75       16?9                 123:array (
)       	;0
153 48   FE_RESET_R/77             $94=      16?8                 ?166                	;0
154 48   FE_FETCH_R/78             ?0        $94                  16?5                	;166	>>166	<<165
155 49   FETCH_STATIC_PROP_R/173   $96=      124:'rServers'       125:'XUI'           	;0
156 49   FETCH_DIM_R/81            $97=      $96                  16?5                	;0
157 49   FETCH_DIM_R/81            $98=      $97                  127:'api_url_ip'    	;0
158 49   CONCAT/8                  #99=      $98                  128:'&action=vod'   	;0
159 49   INIT_ARRAY/71             #100=     #99                  129:'url'           	;10
160 49   INIT_ARRAY/71             #101=     16?2                 130:'function'      	;10
161 49   ADD_ARRAY_ELEMENT/72      #101=     16?6                 131:'stream_ids'    	;0
162 49   ADD_ARRAY_ELEMENT/72      #100=     #101                 132:'postdata'      	;0
163 49   ASSIGN_DIM/147            ?77       16?9                 16?5                	;0
164 49   OP_DATA/137               ?0        #100                 ?0                  	;0
165 50   JMP/42                    ?0        ?154                 ?0                  	;0	>>154
166 50   FE_FREE/127               ?0        $94                  ?0                  	;0	<<153
167 53   INIT_STATIC_METHOD_CALL/113 ?0        133:'XUI'            135:'b2eF9C6C7afa4eec'	;1
168 53   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
169 53   DO_FCALL/60               ?84       ?0                   ?0                  	;0
170 54   INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'json_encode'   	;1
171 54   SEND_VAL_EX/116           ?80       139:array (
  'result' => true,
) ?1                  	;0
172 54   DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
173 54   ECHO/40                   ?0        $103                 ?0                  	;0
174 55   EXIT/79                   ?0        ?0                   ?0                  	;0
175 59   GOTO/253                  ?0        ?1                   ?140                	;0	<<74
176 61   SWITCH_STRING/188         ?0        16?2                 141:array (
  'start' => 188,
  'stop' => 235,
  'list' => 282,
  'offline' => 303,
  'online' => 329,
)	;355	<<34
177 62   CASE/48                   #104=     16?2                 142:'start'         	;0	>>179
178 62   JMPNZ/44                  ?0        #104                 ?188                	;0	>>188
179 74   CASE/48                   #104=     16?2                 143:'stop'          	;0	>>181	<<177
180 74   JMPNZ/44                  ?0        #104                 ?235                	;0	>>235
181 86   CASE/48                   #104=     16?2                 144:'list'          	;0	>>183	<<179
182 86   JMPNZ/44                  ?0        #104                 ?282                	;0	>>282
183 96   CASE/48                   #104=     16?2                 145:'offline'       	;0	>>185	<<181
184 96   JMPNZ/44                  ?0        #104                 ?303                	;0	>>303
185 107  CASE/48                   #104=     16?2                 146:'online'        	;0	>>187	<<183
186 107  JMPNZ/44                  ?0        #104                 ?329                	;0	>>329
187 107  JMP/42                    ?0        ?355                 ?0                  	;0	>>355	<<185
188 63   INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'array_map'     	;2	<<178
189 63   SEND_VAL_EX/116           ?80       149:'intval'         ?1                  	;0
190 63   FETCH_STATIC_PROP_FUNC_ARG/177 $105=     150:'rRequest'       151:'XUI'           	;2
191 63   FETCH_DIM_FUNC_ARG/93     $106=     $105                 153:'stream_ids'    	;2
192 63   SEND_VAR_EX/66            ?96       $106                 ?2                  	;0
193 63   DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
194 63   ASSIGN/38                 ?90       16?6                 $107                	;0
195 64   FETCH_STATIC_PROP_IS/176  $109=     154:'rRequest'       155:'XUI'           	;0
196 64   ISSET_ISEMPTY_DIM_OBJ/115 #110=     $109                 157:'servers'       	;16777216
197 64   JMPZ/43                   ?0        #110                 ?204                	;0	>>204
198 64   INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'array_keys'    	;1
199 64   FETCH_STATIC_PROP_FUNC_ARG/177 $111=     160:'rServers'       161:'XUI'           	;1
200 64   SEND_VAR_EX/66            ?80       $111                 ?1                  	;0
201 64   DO_FCALL_BY_NAME/131      $112=     ?0                   ?0                  	;0
202 64   QM_ASSIGN/22              #113=     $112                 ?0                  	;0
203 64   JMP/42                    ?0        ?211                 ?0                  	;0	>>211
204 64   INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'array_map'     	;2	<<197
205 64   SEND_VAL_EX/116           ?80       165:'intval'         ?1                  	;0
206 64   FETCH_STATIC_PROP_FUNC_ARG/177 $114=     166:'rRequest'       167:'XUI'           	;2
207 64   FETCH_DIM_FUNC_ARG/93     $115=     $114                 169:'servers'       	;2
208 64   SEND_VAR_EX/66            ?96       $115                 ?2                  	;0
209 64   DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
210 64   QM_ASSIGN/22              #113=     $116                 ?0                  	;0
211 64   ASSIGN/38                 ?99       16?8                 #113                	;0	<<203
212 65   ASSIGN/38                 ?100      16?9                 170:array (
)       	;0
213 66   FE_RESET_R/77             $119=     16?8                 ?226                	;0
214 66   FE_FETCH_R/78             ?0        $119                 16?5                	;226	>>226	<<225
215 67   FETCH_STATIC_PROP_R/173   $121=     171:'rServers'       172:'XUI'           	;0
216 67   FETCH_DIM_R/81            $122=     $121                 16?5                	;0
217 67   FETCH_DIM_R/81            $123=     $122                 174:'api_url_ip'    	;0
218 67   CONCAT/8                  #124=     $123                 175:'&action=stream'	;0
219 67   INIT_ARRAY/71             #125=     #124                 176:'url'           	;10
220 67   INIT_ARRAY/71             #126=     16?2                 177:'function'      	;10
221 67   ADD_ARRAY_ELEMENT/72      #126=     16?6                 178:'stream_ids'    	;0
222 67   ADD_ARRAY_ELEMENT/72      #125=     #126                 179:'postdata'      	;0
223 67   ASSIGN_DIM/147            ?102      16?9                 16?5                	;0
224 67   OP_DATA/137               ?0        #125                 ?0                  	;0
225 68   JMP/42                    ?0        ?214                 ?0                  	;0	>>214
226 68   FE_FREE/127               ?0        $119                 ?0                  	;0	<<213
227 71   INIT_STATIC_METHOD_CALL/113 ?0        180:'XUI'            182:'B2eF9c6c7AfA4eec'	;1
228 71   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
229 71   DO_FCALL/60               ?109      ?0                   ?0                  	;0
230 72   INIT_FCALL_BY_NAME/59     ?0        ?0                   184:'json_encode'   	;1
231 72   SEND_VAL_EX/116           ?80       186:array (
  'result' => true,
) ?1                  	;0
232 72   DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
233 72   ECHO/40                   ?0        $128                 ?0                  	;0
234 73   EXIT/79                   ?0        ?0                   ?0                  	;0
235 75   INIT_FCALL_BY_NAME/59     ?0        ?0                   187:'array_map'     	;2	<<180
236 75   SEND_VAL_EX/116           ?80       189:'intval'         ?1                  	;0
237 75   FETCH_STATIC_PROP_FUNC_ARG/177 $129=     190:'rRequest'       191:'XUI'           	;2
238 75   FETCH_DIM_FUNC_ARG/93     $130=     $129                 193:'stream_ids'    	;2
239 75   SEND_VAR_EX/66            ?96       $130                 ?2                  	;0
240 75   DO_FCALL_BY_NAME/131      $131=     ?0                   ?0                  	;0
241 75   ASSIGN/38                 ?114      16?6                 $131                	;0
242 76   FETCH_STATIC_PROP_IS/176  $133=     194:'rRequest'       195:'XUI'           	;0
243 76   ISSET_ISEMPTY_DIM_OBJ/115 #134=     $133                 197:'servers'       	;16777216
244 76   JMPZ/43                   ?0        #134                 ?251                	;0	>>251
245 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   198:'array_keys'    	;1
246 76   FETCH_STATIC_PROP_FUNC_ARG/177 $135=     200:'rServers'       201:'XUI'           	;1
247 76   SEND_VAR_EX/66            ?80       $135                 ?1                  	;0
248 76   DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
249 76   QM_ASSIGN/22              #137=     $136                 ?0                  	;0
250 76   JMP/42                    ?0        ?258                 ?0                  	;0	>>258
251 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   203:'array_map'     	;2	<<244
252 76   SEND_VAL_EX/116           ?80       205:'intval'         ?1                  	;0
253 76   FETCH_STATIC_PROP_FUNC_ARG/177 $138=     206:'rRequest'       207:'XUI'           	;2
254 76   FETCH_DIM_FUNC_ARG/93     $139=     $138                 209:'servers'       	;2
255 76   SEND_VAR_EX/66            ?96       $139                 ?2                  	;0
256 76   DO_FCALL_BY_NAME/131      $140=     ?0                   ?0                  	;0
257 76   QM_ASSIGN/22              #137=     $140                 ?0                  	;0
258 76   ASSIGN/38                 ?123      16?8                 #137                	;0	<<250
259 77   ASSIGN/38                 ?124      16?9                 210:array (
)       	;0
260 78   FE_RESET_R/77             $143=     16?8                 ?273                	;0
261 78   FE_FETCH_R/78             ?0        $143                 16?5                	;273	>>273	<<272
262 79   FETCH_STATIC_PROP_R/173   $145=     211:'rServers'       212:'XUI'           	;0
263 79   FETCH_DIM_R/81            $146=     $145                 16?5                	;0
264 79   FETCH_DIM_R/81            $147=     $146                 214:'api_url_ip'    	;0
265 79   CONCAT/8                  #148=     $147                 215:'&action=stream'	;0
266 79   INIT_ARRAY/71             #149=     #148                 216:'url'           	;10
267 79   INIT_ARRAY/71             #150=     16?2                 217:'function'      	;10
268 79   ADD_ARRAY_ELEMENT/72      #150=     16?6                 218:'stream_ids'    	;0
269 79   ADD_ARRAY_ELEMENT/72      #149=     #150                 219:'postdata'      	;0
270 79   ASSIGN_DIM/147            ?126      16?9                 16?5                	;0
271 79   OP_DATA/137               ?0        #149                 ?0                  	;0
272 80   JMP/42                    ?0        ?261                 ?0                  	;0	>>261
273 80   FE_FREE/127               ?0        $143                 ?0                  	;0	<<260
274 83   INIT_STATIC_METHOD_CALL/113 ?0        220:'XUI'            222:'B2EF9C6c7AFA4eeC'	;1
275 83   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
276 83   DO_FCALL/60               ?133      ?0                   ?0                  	;0
277 84   INIT_FCALL_BY_NAME/59     ?0        ?0                   224:'json_encode'   	;1
278 84   SEND_VAL_EX/116           ?80       226:array (
  'result' => true,
) ?1                  	;0
279 84   DO_FCALL_BY_NAME/131      $152=     ?0                   ?0                  	;0
280 84   ECHO/40                   ?0        $152                 ?0                  	;0
281 85   EXIT/79                   ?0        ?0                   ?0                  	;0
282 87   ASSIGN/38                 ?135      16?3                 227:array (
)       	;0	<<182
283 88   INIT_METHOD_CALL/112      ?0        16?0                 228:'query'         	;1
284 88   SEND_VAL_EX/116           ?80       230:'SELECT id,stream_display_name FROM `streams` WHERE type <> 2' ?1                  	;0
285 88   DO_FCALL/60               ?136      ?0                   ?0                  	;0
286 89   INIT_METHOD_CALL/112      ?0        16?0                 231:'get_rows'      	;0
287 89   DO_FCALL/60               $155=     ?0                   ?0                  	;0
288 89   FE_RESET_R/77             $156=     $155                 ?297                	;0
289 89   FE_FETCH_R/78             ?0        $156                 16?10               	;297	>>297	<<296
290 90   FETCH_DIM_R/81            $158=     16?10                233:'id'            	;0
291 90   INIT_ARRAY/71             #159=     $158                 234:'id'            	;10
292 90   FETCH_DIM_R/81            $160=     16?10                235:'stream_display_name'	;0
293 90   ADD_ARRAY_ELEMENT/72      #159=     $160                 236:'stream_name'   	;0
294 90   ASSIGN_DIM/147            ?139      16?3                 ?4414262            	;0
295 90   OP_DATA/137               ?0        #159                 ?0                  	;0
296 91   JMP/42                    ?0        ?289                 ?0                  	;0	>>289
297 91   FE_FREE/127               ?0        $156                 ?0                  	;0	<<288
298 94   INIT_FCALL_BY_NAME/59     ?0        ?0                   237:'json_encode'   	;1
299 94   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
300 94   DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
301 94   ECHO/40                   ?0        $161                 ?0                  	;0
302 95   GOTO/253                  ?0        ?355                 ?239                	;0
303 97   INIT_METHOD_CALL/112      ?0        16?0                 240:'query'         	;1	<<184
304 97   SEND_VAL_EX/116           ?80       242:'SELECT t1.stream_status,t1.server_id,t1.stream_id  FROM `streams_servers` t1 INNER JOIN `streams` t2 ON t2.id = t1.stream_id AND t2.type <> 2 WHERE t1.stream_status <> 0' ?1                  	;0
305 97   DO_FCALL/60               ?144      ?0                   ?0                  	;0
306 98   INIT_METHOD_CALL/112      ?0        16?0                 243:'get_rows'      	;4
307 98   SEND_VAL_EX/116           ?80       245:true             ?1                  	;0
308 98   SEND_VAL_EX/116           ?96       246:'stream_id'      ?2                  	;0
309 98   SEND_VAL_EX/116           ?112      247:false            ?3                  	;0
310 98   SEND_VAL_EX/116           ?128      248:'server_id'      ?4                  	;0
311 98   DO_FCALL/60               $163=     ?0                   ?0                  	;0
312 98   ASSIGN/38                 ?146      16?11                $163                	;0
313 99   ASSIGN/38                 ?147      16?3                 249:array (
)       	;0
314 100  FE_RESET_R/77             $166=     16?11                ?323                	;0
315 100  FE_FETCH_R/78             #167=     $166                 16?8                	;323	>>323	<<322
316 100  ASSIGN/38                 ?150      16?12                #167                	;0
317 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   250:'array_keys'    	;1
318 101  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
319 101  DO_FCALL_BY_NAME/131      $170=     ?0                   ?0                  	;0
320 101  ASSIGN_DIM/147            ?151      16?3                 16?12               	;0
321 101  OP_DATA/137               ?0        $170                 ?0                  	;0
322 102  JMP/42                    ?0        ?315                 ?0                  	;0	>>315
323 102  FE_FREE/127               ?0        $166                 ?0                  	;0	<<314
324 105  INIT_FCALL_BY_NAME/59     ?0        ?0                   252:'json_encode'   	;1
325 105  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
326 105  DO_FCALL_BY_NAME/131      $171=     ?0                   ?0                  	;0
327 105  ECHO/40                   ?0        $171                 ?0                  	;0
328 106  GOTO/253                  ?0        ?355                 ?254                	;0
329 108  INIT_METHOD_CALL/112      ?0        16?0                 255:'query'         	;1	<<186
330 108  SEND_VAL_EX/116           ?80       257:'SELECT t1.stream_status,t1.server_id,t1.stream_id FROM `streams_servers` t1 INNER JOIN `streams` t2 ON t2.id = t1.stream_id AND t2.type <> 2 WHERE t1.pid > 0 AND t1.stream_status = 0' ?1                  	;0
331 108  DO_FCALL/60               ?154      ?0                   ?0                  	;0
332 109  INIT_METHOD_CALL/112      ?0        16?0                 258:'get_rows'      	;4
333 109  SEND_VAL_EX/116           ?80       260:true             ?1                  	;0
334 109  SEND_VAL_EX/116           ?96       261:'stream_id'      ?2                  	;0
335 109  SEND_VAL_EX/116           ?112      262:false            ?3                  	;0
336 109  SEND_VAL_EX/116           ?128      263:'server_id'      ?4                  	;0
337 109  DO_FCALL/60               $173=     ?0                   ?0                  	;0
338 109  ASSIGN/38                 ?156      16?11                $173                	;0
339 110  ASSIGN/38                 ?157      16?3                 264:array (
)       	;0
340 111  FE_RESET_R/77             $176=     16?11                ?349                	;0
341 111  FE_FETCH_R/78             #177=     $176                 16?8                	;349	>>349	<<348
342 111  ASSIGN/38                 ?160      16?12                #177                	;0
343 112  INIT_FCALL_BY_NAME/59     ?0        ?0                   265:'array_keys'    	;1
344 112  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
345 112  DO_FCALL_BY_NAME/131      $180=     ?0                   ?0                  	;0
346 112  ASSIGN_DIM/147            ?161      16?3                 16?12               	;0
347 112  OP_DATA/137               ?0        $180                 ?0                  	;0
348 113  JMP/42                    ?0        ?341                 ?0                  	;0	>>341
349 113  FE_FREE/127               ?0        $176                 ?0                  	;0	<<340
350 116  INIT_FCALL_BY_NAME/59     ?0        ?0                   267:'json_encode'   	;1
351 116  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
352 116  DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
353 116  ECHO/40                   ?0        $181                 ?0                  	;0
354 117  GOTO/253                  ?0        ?355                 ?269                	;0
355 121  GOTO/253                  ?0        ?1                   ?270                	;0	<<187
356 124  CASE/48                   #182=     16?2                 271:'info'          	;0	>>358	<<36
357 124  JMPNZ/44                  ?0        #182                 ?359                	;0	>>359
358 124  JMP/42                    ?0        ?408                 ?0                  	;0	>>408	<<356
359 125  GOTO/253                  ?0        ?368                 ?272                	;0	<<357
360 128  INIT_FCALL_BY_NAME/59     ?0        ?0                   273:'json_encode'   	;1
361 128  INIT_ARRAY/71             #183=     275:true             276:'result'        	;10
362 128  ADD_ARRAY_ELEMENT/72      #183=     16?13                277:'user_info'     	;0
363 128  SEND_VAL_EX/116           ?80       #183                 ?1                  	;0
364 128  DO_FCALL_BY_NAME/131      $184=     ?0                   ?0                  	;0
365 128  ECHO/40                   ?0        $184                 ?0                  	;0
366 131  GOTO/253                  ?0        ?408                 ?278                	;0
367 132  GOTO/253                  ?0        ?408                 ?279                	;0
368 134  FETCH_STATIC_PROP_IS/176  $185=     280:'rRequest'       281:'XUI'           	;0
369 134  ISSET_ISEMPTY_DIM_OBJ/115 #186=     $185                 283:'username'      	;16777216
370 134  BOOL_NOT/13               #187=     #186                 ?0                  	;0
371 134  JMPZ_EX/46                #187=     #187                 ?376                	;0	>>376
372 134  FETCH_STATIC_PROP_IS/176  $188=     284:'rRequest'       285:'XUI'           	;0
373 134  ISSET_ISEMPTY_DIM_OBJ/115 #189=     $188                 287:'password'      	;16777216
374 134  BOOL_NOT/13               #190=     #189                 ?0                  	;0
375 134  BOOL/52                   #187=     #190                 ?0                  	;0
376 134  JMPZ/43                   ?0        #187                 ?378                	;0	>>378	<<371
377 135  GOTO/253                  ?0        ?383                 ?288                	;0
378 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   289:'json_encode'   	;1	<<376
379 137  SEND_VAL_EX/116           ?80       291:array (
  'result' => false,
  'error' => 'PARAMETER ERROR (user/pass)',
) ?1                  	;0
380 137  DO_FCALL_BY_NAME/131      $191=     ?0                   ?0                  	;0
381 137  ECHO/40                   ?0        $191                 ?0                  	;0
382 138  GOTO/253                  ?0        ?366                 ?292                	;0
383 140  FETCH_STATIC_PROP_R/173   $192=     293:'rRequest'       294:'XUI'           	;0
384 140  FETCH_DIM_R/81            $193=     $192                 296:'username'      	;0
385 140  ASSIGN/38                 ?176      16?14                $193                	;0
386 141  GOTO/253                  ?0        ?387                 ?297                	;0
387 143  FETCH_STATIC_PROP_R/173   $195=     298:'rRequest'       299:'XUI'           	;0
388 143  FETCH_DIM_R/81            $196=     $195                 301:'password'      	;0
389 143  ASSIGN/38                 ?179      16?15                $196                	;0
390 144  INIT_STATIC_METHOD_CALL/113 ?0        302:'XUI'            304:'cC988751eeBBF271'	;5
391 144  SEND_VAL_EX/116           ?80       306:false            ?1                  	;0
392 144  SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
393 144  SEND_VAR_EX/66            ?112      16?15                ?3                  	;0
394 144  SEND_VAL_EX/116           ?128      307:true             ?4                  	;0
395 144  SEND_VAL_EX/116           ?144      308:true             ?5                  	;0
396 144  DO_FCALL/60               $198=     ?0                   ?0                  	;0
397 144  ASSIGN/38                 ?181      16?13                $198                	;0
398 145  ISSET_ISEMPTY_CV/197      #200=     16?13                ?0                  	;16777216
399 145  BOOL_NOT/13               #201=     #200                 ?0                  	;0
400 145  JMPZ/43                   ?0        #201                 ?402                	;0	>>402
401 146  GOTO/253                  ?0        ?360                 ?309                	;0
402 148  INIT_FCALL_BY_NAME/59     ?0        ?0                   310:'json_encode'   	;1	<<400
403 148  SEND_VAL_EX/116           ?80       312:array (
  'result' => false,
  'error' => 'NOT EXISTS',
) ?1                  	;0
404 148  DO_FCALL_BY_NAME/131      $202=     ?0                   ?0                  	;0
405 148  ECHO/40                   ?0        $202                 ?0                  	;0
406 149  GOTO/253                  ?0        ?366                 ?313                	;0
407 150  GOTO/253                  ?0        ?360                 ?314                	;0
408 155  GOTO/253                  ?0        ?1                   ?315                	;0	<<358
409 158  CASE/48                   #203=     16?2                 316:'list'          	;0	>>411	<<38
410 158  JMPNZ/44                  ?0        #203                 ?412                	;0	>>412
411 158  JMP/42                    ?0        ?423                 ?0                  	;0	>>423	<<409
412 159  INIT_METHOD_CALL/112      ?0        16?0                 317:'query'         	;1	<<410
413 159  SEND_VAL_EX/116           ?80       319:'SELECT id,username,credits,group_id,group_name,last_login,date_registered,email,ip,status FROM `users` t1 INNER JOIN `users_groups` t2 ON t1.member_group_id = t2.group_id' ?1                  	;0
414 159  DO_FCALL/60               ?186      ?0                   ?0                  	;0
415 160  INIT_METHOD_CALL/112      ?0        16?0                 320:'get_rows'      	;0
416 160  DO_FCALL/60               $205=     ?0                   ?0                  	;0
417 160  ASSIGN/38                 ?188      16?16                $205                	;0
418 161  INIT_FCALL_BY_NAME/59     ?0        ?0                   322:'json_encode'   	;1
419 161  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
420 161  DO_FCALL_BY_NAME/131      $207=     ?0                   ?0                  	;0
421 161  ECHO/40                   ?0        $207                 ?0                  	;0
422 162  GOTO/253                  ?0        ?423                 ?324                	;0
423 166  GOTO/253                  ?0        ?1                   ?325                	;0	<<411
424 168  GOTO/253                  ?0        ?1                   ?326                	;0	<<39
425 170  INIT_FCALL_BY_NAME/59     ?0        ?0                   327:'F82199eff9017bc9'	;0
426 170  DO_FCALL_BY_NAME/131      ?190      ?0                   ?0                  	;0
427 172  FETCH_STATIC_PROP_IS/176  $209=     329:'rSettings'      330:'XUI'           	;0
428 172  ISSET_ISEMPTY_DIM_OBJ/115 #210=     $209                 332:'api_pass'      	;16777216
429 172  BOOL_NOT/13               #211=     #210                 ?0                  	;0
430 172  JMPZ_EX/46                #211=     #211                 ?437                	;0	>>437
431 172  FETCH_STATIC_PROP_R/173   $212=     333:'rRequest'       334:'XUI'           	;0
432 172  FETCH_DIM_R/81            $213=     $212                 336:'api_pass'      	;0
433 172  FETCH_STATIC_PROP_R/173   $214=     337:'rSettings'      338:'XUI'           	;0
434 172  FETCH_DIM_R/81            $215=     $214                 340:'api_pass'      	;0
435 172  IS_NOT_EQUAL/18           #216=     $213                 $215                	;0
436 172  BOOL/52                   #211=     #216                 ?0                  	;0
437 172  BOOL_NOT/13               #217=     #211                 ?0                  	;0	<<430
438 172  JMPZ/43                   ?0        #217                 ?440                	;0	>>440
439 173  GOTO/253                  ?0        ?442                 ?341                	;0
440 175  INIT_FCALL_BY_NAME/59     ?0        ?0                   342:'f82199eff9017Bc9'	;0	<<438
441 175  DO_FCALL_BY_NAME/131      ?200      ?0                   ?0                  	;0
442 177  GOTO/253                  ?0        ?2                   ?344                	;0
443 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   345:'register_shutdown_function'	;1	<<0
444 179  SEND_VAL_EX/116           ?80       347:'shutdown'       ?1                  	;0
445 179  DO_FCALL_BY_NAME/131      ?201      ?0                   ?0                  	;0
446 180  INIT_FCALL_BY_NAME/59     ?0        ?0                   348:'set_time_limit'	;1
447 180  SEND_VAL_EX/116           ?80       350:0                ?1                  	;0
448 180  DO_FCALL_BY_NAME/131      ?202      ?0                   ?0                  	;0
449 181  INCLUDE_OR_EVAL/73        ?203      351:'../init.php'    ?0                  	;8
450 182  INIT_STATIC_METHOD_CALL/113 ?0        352:'XUI'            354:'aD72b4259CA295B2'	;0
451 182  DO_FCALL/60               $222=     ?0                   ?0                  	;0
452 182  ASSIGN/38                 ?205      16?17                $222                	;0
453 183  INIT_FCALL_BY_NAME/59     ?0        ?0                   356:'in_array'      	;2
454 183  SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
455 183  INIT_STATIC_METHOD_CALL/113 ?0        358:'XUI'            360:'de052f142A92e9BF'	;0
456 183  DO_FCALL/60               $224=     ?0                   ?0                  	;0
457 183  SEND_VAR_NO_REF_EX/50     ?96       $224                 ?2                  	;0
458 183  DO_FCALL_BY_NAME/131      $225=     ?0                   ?0                  	;0
459 183  BOOL_NOT/13               #226=     $225                 ?0                  	;0
460 183  JMPZ_EX/46                #226=     #226                 ?469                	;0	>>469
461 183  INIT_FCALL_BY_NAME/59     ?0        ?0                   362:'in_array'      	;2
462 183  SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
463 183  FETCH_STATIC_PROP_FUNC_ARG/177 $227=     364:'rSettings'      365:'XUI'           	;2
464 183  FETCH_DIM_FUNC_ARG/93     $228=     $227                 367:'api_ips'       	;2
465 183  SEND_VAR_EX/66            ?96       $228                 ?2                  	;0
466 183  DO_FCALL_BY_NAME/131      $229=     ?0                   ?0                  	;0
467 183  BOOL_NOT/13               #230=     $229                 ?0                  	;0
468 183  BOOL/52                   #226=     #230                 ?0                  	;0
469 183  BOOL_NOT/13               #231=     #226                 ?0                  	;0	<<460
470 183  JMPZ/43                   ?0        #231                 ?472                	;0	>>472
471 184  GOTO/253                  ?0        ?427                 ?368                	;0
472 186  GOTO/253                  ?0        ?425                 ?369                	;0	<<470
473 188  NOP/0                     ?0        ?0                   ?0                  	;0
474 197  NOP/0                     ?0        370:1                ?0                  	;4294967295
*/

?>