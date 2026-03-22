<?php


function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  76  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1  77  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
	2  77  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3  77  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4  77  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5  77  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6  78  GOTO/253                  ?0        ?9                   ?3                  	;0
	7  80  INIT_METHOD_CALL/112      ?0        16?0                 4:'close_mysql'     	;0	<<5
	8  80  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	9  82  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?190                 ?0                  	;0	>>190
1   5    FETCH_CONSTANT/99         #7=       ?0                   1:'SERVER_ID'       	;16
2   5    FETCH_DIM_R/81            $8=       16?0                 4:'vframes_server_id'	;0
3   5    IS_EQUAL/17               #9=       #7                   $8                  	;0
4   5    JMPZ/43                   ?0        #9                   ?6                  	;0	>>6
5   6    GOTO/253                  ?0        ?165                 ?5                  	;0
6   8    FETCH_DIM_R/81            $11=      16?0                 9:'vframes_server_id'	;0	<<4
7   8    FETCH_STATIC_PROP_R/173   $10=      6:'rServers'         7:'XUI'             	;0
8   8    FETCH_DIM_R/81            $12=      $10                  $11                 	;0
9   8    FETCH_DIM_R/81            $13=      $12                  10:'site_url'       	;0
10  8    ASSIGN/38                 ?7        16?1                 $13                 	;0
11  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'header'         	;1
12  9    CONCAT/8                  #15=      13:'Location: '      16?1                	;0
13  9    CONCAT/8                  #16=      #15                  14:'admin/thumb?stream='	;0
14  9    CONCAT/8                  #17=      #16                  16?2                	;0
15  9    CONCAT/8                  #18=      #17                  15:'&aid='          	;0
16  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'intval'         	;1
17  9    FETCH_STATIC_PROP_FUNC_ARG/177 $19=      18:'rRequest'        19:'XUI'            	;1
18  9    FETCH_DIM_FUNC_ARG/93     $20=      $19                  21:'aid'            	;1
19  9    SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
20  9    DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
21  9    CONCAT/8                  #22=      #18                  $21                 	;0
22  9    CONCAT/8                  #23=      #22                  22:'&uitoken='      	;0
23  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'urlencode'      	;1
24  9    FETCH_STATIC_PROP_FUNC_ARG/177 $24=      25:'rRequest'        26:'XUI'            	;1
25  9    FETCH_DIM_FUNC_ARG/93     $25=      $24                  28:'uitoken'        	;1
26  9    SEND_VAR_EX/66            ?80       $25                  ?1                  	;0
27  9    DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
28  9    CONCAT/8                  #27=      #23                  $26                 	;0
29  9    CONCAT/8                  #28=      #27                  29:'&expires='      	;0
30  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'intval'         	;1
31  9    FETCH_STATIC_PROP_FUNC_ARG/177 $29=      32:'rRequest'        33:'XUI'            	;1
32  9    FETCH_DIM_FUNC_ARG/93     $30=      $29                  35:'expires'        	;1
33  9    SEND_VAR_EX/66            ?80       $30                  ?1                  	;0
34  9    DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
35  9    CONCAT/8                  #32=      #28                  $31                 	;0
36  9    SEND_VAL_EX/116           ?80       #32                  ?1                  	;0
37  9    DO_FCALL_BY_NAME/131      ?26       ?0                   ?0                  	;0
38  10   EXIT/79                   ?0        ?0                   ?0                  	;0
39  11   GOTO/253                  ?0        ?189                 ?36                 	;0
40  12   GOTO/253                  ?0        ?165                 ?37                 	;0
41  14   FETCH_STATIC_PROP_IS/176  $34=      38:'rRequest'        39:'XUI'            	;0
42  14   ISSET_ISEMPTY_DIM_OBJ/115 #35=      $34                  41:'uitoken'        	;16777216
43  14   BOOL_NOT/13               #36=      #35                  ?0                  	;0
44  14   JMPZ/43                   ?0        #36                  ?46                 	;0	>>46
45  15   GOTO/253                  ?0        ?49                  ?42                 	;0
46  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'F82199eff9017BC9'	;0	<<44
47  17   DO_FCALL_BY_NAME/131      ?30       ?0                   ?0                  	;0
48  18   GOTO/253                  ?0        ?65                  ?45                 	;0
49  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'json_decode'    	;2
50  20   INIT_STATIC_METHOD_CALL/113 ?0        48:'Xui\\Functions'  50:'decrypt'        	;3
51  20   FETCH_STATIC_PROP_FUNC_ARG/177 $38=      52:'rRequest'        53:'XUI'            	;1
52  20   FETCH_DIM_FUNC_ARG/93     $39=      $38                  55:'uitoken'        	;1
53  20   SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
54  20   FETCH_STATIC_PROP_FUNC_ARG/177 $40=      56:'rSettings'       57:'XUI'            	;2
55  20   FETCH_DIM_FUNC_ARG/93     $41=      $40                  59:'live_streaming_pass'	;2
56  20   SEND_VAR_EX/66            ?96       $41                  ?2                  	;0
57  20   FETCH_CONSTANT/99         #42=      ?0                   60:'OPENSSL_EXTRA'  	;16
58  20   SEND_VAL_EX/116           ?112      #42                  ?3                  	;0
59  20   DO_FCALL/60               $43=      ?0                   ?0                  	;0
60  20   SEND_VAR_NO_REF_EX/50     ?80       $43                  ?1                  	;0
61  20   SEND_VAL_EX/116           ?96       63:true              ?2                  	;0
62  20   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
63  20   ASSIGN/38                 ?38       16?3                 $44                 	;0
64  21   GOTO/253                  ?0        ?79                  ?64                 	;0
65  24   NEW/68                    $46=      65:'Database'        ?96                 	;1
66  24   SEND_VAL_EX/116           ?80       67:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
67  24   DO_FCALL/60               ?40       ?8                   ?0                  	;0
68  24   ASSIGN/38                 ?41       16?4                 $46                 	;0
69  25   FETCH_STATIC_PROP_W/174   $49=      68:'db'              69:'XUI'            	;0
70  25   ASSIGN_REF/39             ?43       $49                  16?4                	;0
71  26   INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'intval'         	;1
72  26   FETCH_STATIC_PROP_FUNC_ARG/177 $51=      73:'rRequest'        74:'XUI'            	;1
73  26   FETCH_DIM_FUNC_ARG/93     $52=      $51                  76:'stream'         	;1
74  26   SEND_VAR_EX/66            ?80       $52                  ?1                  	;0
75  26   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
76  26   ASSIGN/38                 ?47       16?2                 $53                 	;0
77  27   ASSIGN/38                 ?48       16?0                 77:array (
)        	;0
78  28   GOTO/253                  ?0        ?204                 ?78                 	;0
79  30   FETCH_DIM_R/81            $58=      16?3                 83:'stream_id'      	;0
80  30   FETCH_STATIC_PROP_W/174   $56=      79:'rRequest'        80:'XUI'            	;0
81  30   ASSIGN_DIM/147            ?50       $56                  82:'stream'         	;0
82  30   OP_DATA/137               ?0        $58                  ?0                  	;0
83  31   FETCH_STATIC_PROP_R/173   $59=      84:'rSettings'       85:'XUI'            	;0
84  31   FETCH_DIM_R/81            $60=      $59                  87:'ip_subnet_match'	;0
85  31   JMPZ/43                   ?0        $60                  ?118                	;0	>>118
86  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'implode'        	;2
87  31   SEND_VAL_EX/116           ?80       90:'.'               ?1                  	;0
88  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'array_slice'    	;3
89  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'explode'        	;2
90  31   SEND_VAL_EX/116           ?80       95:'.'               ?1                  	;0
91  31   FETCH_DIM_FUNC_ARG/93     $61=      16?3                 96:'ip'             	;2
92  31   SEND_VAR_EX/66            ?96       $61                  ?2                  	;0
93  31   DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
94  31   SEND_VAR_NO_REF_EX/50     ?80       $62                  ?1                  	;0
95  31   SEND_VAL_EX/116           ?96       97:0                 ?2                  	;0
96  31   SEND_VAL_EX/116           ?112      98:-1                ?3                  	;0
97  31   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
98  31   SEND_VAR_NO_REF_EX/50     ?96       $63                  ?2                  	;0
99  31   DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
100 31   INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'implode'        	;2
101 31   SEND_VAL_EX/116           ?80       101:'.'              ?1                  	;0
102 31   INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'array_slice'   	;3
103 31   INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'explode'       	;2
104 31   SEND_VAL_EX/116           ?80       106:'.'              ?1                  	;0
105 31   INIT_STATIC_METHOD_CALL/113 ?0        107:'XUI'            109:'aD72b4259Ca295B2'	;0
106 31   DO_FCALL/60               $65=      ?0                   ?0                  	;0
107 31   SEND_VAR_NO_REF_EX/50     ?96       $65                  ?2                  	;0
108 31   DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
109 31   SEND_VAR_NO_REF_EX/50     ?80       $66                  ?1                  	;0
110 31   SEND_VAL_EX/116           ?96       111:0                ?2                  	;0
111 31   SEND_VAL_EX/116           ?112      112:-1               ?3                  	;0
112 31   DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
113 31   SEND_VAR_NO_REF_EX/50     ?96       $67                  ?2                  	;0
114 31   DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
115 31   IS_EQUAL/17               #69=      $64                  $68                 	;0
116 31   QM_ASSIGN/22              #70=      #69                  ?0                  	;0
117 31   JMP/42                    ?0        ?123                 ?0                  	;0	>>123
118 31   FETCH_DIM_R/81            $71=      16?3                 113:'ip'            	;0	<<85
119 31   INIT_STATIC_METHOD_CALL/113 ?0        114:'XUI'            116:'Ad72b4259cA295B2'	;0
120 31   DO_FCALL/60               $72=      ?0                   ?0                  	;0
121 31   IS_EQUAL/17               #73=      $71                  $72                 	;0
122 31   QM_ASSIGN/22              #70=      #73                  ?0                  	;0
123 31   ASSIGN/38                 ?67       16?5                 #70                 	;0	<<117
124 32   FETCH_DIM_R/81            $75=      16?3                 118:'expires'       	;0
125 32   INIT_FCALL_BY_NAME/59     ?0        ?0                   119:'time'          	;0
126 32   DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
127 32   IS_SMALLER/19             #77=      $75                  $76                 	;0
128 32   JMPNZ_EX/47               #77=      #77                  ?131                	;0	>>131
129 32   BOOL_NOT/13               #78=      16?5                 ?0                  	;0
130 32   BOOL/52                   #77=      #78                  ?0                  	;0
131 32   BOOL_NOT/13               #79=      #77                  ?0                  	;0	<<128
132 32   JMPZ/43                   ?0        #79                  ?134                	;0	>>134
133 33   GOTO/253                  ?0        ?136                 ?121                	;0
134 35   INIT_FCALL_BY_NAME/59     ?0        ?0                   122:'f82199EfF9017Bc9'	;0	<<132
135 35   DO_FCALL_BY_NAME/131      ?73       ?0                   ?0                  	;0
136 37   GOTO/253                  ?0        ?65                  ?124                	;0
137 39   INIT_FCALL_BY_NAME/59     ?0        ?0                   125:'header'        	;1
138 39   INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'intval'        	;1
139 39   INIT_FCALL_BY_NAME/59     ?0        ?0                   129:'time'          	;0
140 39   DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
141 39   INIT_FCALL_BY_NAME/59     ?0        ?0                   131:'filemtime'     	;1
142 39   FETCH_CONSTANT/99         #82=      ?0                   133:'STREAMS_PATH'  	;16
143 39   CONCAT/8                  #83=      #82                  16?2                	;0
144 39   CONCAT/8                  #84=      #83                  136:'_.jpg'         	;0
145 39   SEND_VAL_EX/116           ?80       #84                  ?1                  	;0
146 39   DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
147 39   SUB/2                     #86=      $81                  $85                 	;0
148 39   SEND_VAL_EX/116           ?80       #86                  ?1                  	;0
149 39   DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
150 39   CONCAT/8                  #88=      137:'Age: '          $87                 	;0
151 39   SEND_VAL_EX/116           ?80       #88                  ?1                  	;0
152 39   DO_FCALL_BY_NAME/131      ?82       ?0                   ?0                  	;0
153 40   INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'header'        	;1
154 40   SEND_VAL_EX/116           ?80       140:'Content-type: image/jpg' ?1                  	;0
155 40   DO_FCALL_BY_NAME/131      ?83       ?0                   ?0                  	;0
156 41   INIT_FCALL_BY_NAME/59     ?0        ?0                   141:'file_get_contents'	;1
157 41   FETCH_CONSTANT/99         #91=      ?0                   143:'STREAMS_PATH'  	;16
158 41   CONCAT/8                  #92=      #91                  16?2                	;0
159 41   CONCAT/8                  #93=      #92                  146:'_.jpg'         	;0
160 41   SEND_VAL_EX/116           ?80       #93                  ?1                  	;0
161 41   DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
162 41   ECHO/40                   ?0        $94                  ?0                  	;0
163 42   EXIT/79                   ?0        ?0                   ?0                  	;0
164 44   GOTO/253                  ?0        ?189                 ?147                	;0
165 47   INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'file_exists'   	;1
166 47   FETCH_CONSTANT/99         #95=      ?0                   150:'STREAMS_PATH'  	;16
167 47   CONCAT/8                  #96=      #95                  16?2                	;0
168 47   CONCAT/8                  #97=      #96                  153:'_.jpg'         	;0
169 47   SEND_VAL_EX/116           ?80       #97                  ?1                  	;0
170 47   DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
171 47   JMPZ_EX/46                #99=      $98                  ?183                	;0	>>183
172 47   INIT_FCALL_BY_NAME/59     ?0        ?0                   154:'time'          	;0
173 47   DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
174 47   INIT_FCALL_BY_NAME/59     ?0        ?0                   156:'filemtime'     	;1
175 47   FETCH_CONSTANT/99         #101=     ?0                   158:'STREAMS_PATH'  	;16
176 47   CONCAT/8                  #102=     #101                 16?2                	;0
177 47   CONCAT/8                  #103=     #102                 161:'_.jpg'         	;0
178 47   SEND_VAL_EX/116           ?80       #103                 ?1                  	;0
179 47   DO_FCALL_BY_NAME/131      $104=     ?0                   ?0                  	;0
180 47   SUB/2                     #105=     $100                 $104                	;0
181 47   IS_SMALLER/19             #106=     #105                 162:60              	;0
182 47   BOOL/52                   #99=      #106                 ?0                  	;0
183 47   JMPZ/43                   ?0        #99                  ?185                	;0	>>185	<<171
184 48   GOTO/253                  ?0        ?188                 ?163                	;0
185 50   INIT_FCALL_BY_NAME/59     ?0        ?0                   164:'F82199eff9017bC9'	;0	<<183
186 50   DO_FCALL_BY_NAME/131      ?100      ?0                   ?0                  	;0
187 51   GOTO/253                  ?0        ?164                 ?166                	;0
188 53   GOTO/253                  ?0        ?137                 ?167                	;0
189 56   GOTO/253                  ?0        ?220                 ?168                	;0
190 58   INIT_FCALL_BY_NAME/59     ?0        ?0                   169:'register_shutdown_function'	;1	<<0
191 58   SEND_VAL_EX/116           ?80       171:'shutdown'       ?1                  	;0
192 58   DO_FCALL_BY_NAME/131      ?101      ?0                   ?0                  	;0
193 59   INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'header'        	;1
194 59   SEND_VAL_EX/116           ?80       174:'Access-Control-Allow-Origin: *' ?1                  	;0
195 59   DO_FCALL_BY_NAME/131      ?102      ?0                   ?0                  	;0
196 60   INIT_FCALL_BY_NAME/59     ?0        ?0                   175:'set_time_limit'	;1
197 60   SEND_VAL_EX/116           ?80       177:0                ?1                  	;0
198 60   DO_FCALL_BY_NAME/131      ?103      ?0                   ?0                  	;0
199 61   INCLUDE_OR_EVAL/73        ?104      178:'../init.php'    ?0                  	;8
200 62   INIT_STATIC_METHOD_CALL/113 ?0        179:'XUI'            181:'Ad72B4259ca295b2'	;0
201 62   DO_FCALL/60               $112=     ?0                   ?0                  	;0
202 62   ASSIGN/38                 ?106      16?6                 $112                	;0
203 63   GOTO/253                  ?0        ?41                  ?183                	;0
204 65   INIT_METHOD_CALL/112      ?0        16?4                 184:'query'         	;2
205 65   SEND_VAL_EX/116           ?80       186:'SELECT * FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type AND t2.live = 1 LEFT JOIN `profiles` t4 ON t1.transcode_profile_id = t4.profile_id WHERE t1.direct_source = 0 AND t1.id = ?' ?1                  	;0
206 65   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
207 65   DO_FCALL/60               ?107      ?0                   ?0                  	;0
208 66   INIT_METHOD_CALL/112      ?0        16?4                 187:'num_rows'      	;0
209 66   DO_FCALL/60               $115=     ?0                   ?0                  	;0
210 66   IS_SMALLER_OR_EQUAL/20    #116=     $115                 189:0               	;0
211 66   BOOL_NOT/13               #117=     #116                 ?0                  	;0
212 66   JMPZ/43                   ?0        #117                 ?214                	;0	>>214
213 67   GOTO/253                  ?0        ?216                 ?190                	;0
214 69   INIT_FCALL_BY_NAME/59     ?0        ?0                   191:'F82199efF9017Bc9'	;0	<<212
215 69   DO_FCALL_BY_NAME/131      ?111      ?0                   ?0                  	;0
216 71   INIT_METHOD_CALL/112      ?0        16?4                 193:'get_row'       	;0
217 71   DO_FCALL/60               $119=     ?0                   ?0                  	;0
218 71   ASSIGN/38                 ?113      16?0                 $119                	;0
219 72   GOTO/253                  ?0        ?1                   ?195                	;0
220 74   NOP/0                     ?0        ?0                   ?0                  	;0
221 83   NOP/0                     ?0        196:1                ?0                  	;4294967295
*/

?>