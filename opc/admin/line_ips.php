<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?35                  ?0                  	;0	>>35
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'intval'          	;1
2   5    FETCH_STATIC_PROP_FUNC_ARG/177 $10=      3:'rRequest'         4:'XUI'             	;1
3   5    FETCH_DIM_FUNC_ARG/93     $11=      $10                  6:'range'           	;1
4   5    SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
5   5    DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
6   5    JMP_SET/152               #13=      $12                  ?8                  	;0
7   5    QM_ASSIGN/22              #13=      7:0                  ?0                  	;0
8   5    ASSIGN/38                 ?4        16?0                 #13                 	;0
9   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'igbinary_unserialize'	;1
10  6    INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'file_get_contents'	;1
11  6    FETCH_CONSTANT/99         #15=      ?0                   12:'CACHE_TMP_PATH' 	;16
12  6    CONCAT/8                  #16=      #15                  15:'lines_per_ip'   	;0
13  6    SEND_VAL_EX/116           ?80       #16                  ?1                  	;0
14  6    DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
15  6    SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
16  6    DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
17  6    JMP_SET/152               #19=      $18                  ?19                 	;0
18  6    QM_ASSIGN/22              #19=      16:array (
)         ?0                  	;0
19  6    ASSIGN/38                 ?10       16?1                 #19                 	;0
20  7    ASSIGN/38                 ?11       16?2                 17:'Line IP Usage'  	;0
21  8    INCLUDE_OR_EVAL/73        ?12       18:'header.php'      ?0                  	;2
22  9    ECHO/40                   ?0        19:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
23  10   GOTO/253                  ?0        ?64                  ?20                 	;0
24  12   IS_EQUAL/17               #23=      16?0                 21:604800           	;0
25  12   BOOL_NOT/13               #24=      #23                  ?0                  	;0
26  12   JMPZ/43                   ?0        #24                  ?28                 	;0	>>28
27  13   GOTO/253                  ?0        ?29                  ?22                 	;0
28  15   ECHO/40                   ?0        23:' selected'       ?0                  	;0	<<26
29  17   ECHO/40                   ?0        24:'>Last 7 Days</option>
									<option value="86400"' ?0                  	;0
30  18   IS_EQUAL/17               #25=      16?0                 25:86400            	;0
31  18   BOOL_NOT/13               #26=      #25                  ?0                  	;0
32  18   JMPZ/43                   ?0        #26                  ?34                 	;0	>>34
33  19   GOTO/253                  ?0        ?83                  ?26                 	;0
34  21   GOTO/253                  ?0        ?82                  ?27                 	;0	<<32
35  23   INCLUDE_OR_EVAL/73        ?17       28:'session.php'     ?0                  	;2	<<0
36  24   INCLUDE_OR_EVAL/73        ?18       29:'functions.php'   ?0                  	;2
37  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'E6d500e19634D513'	;0
38  25   DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
39  25   JMPZ/43                   ?0        $29                  ?41                 	;0	>>41
40  26   GOTO/253                  ?0        ?43                  ?32                 	;0
41  28   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'E72f42a93714ba87'	;0	<<39
42  28   DO_FCALL_BY_NAME/131      ?20       ?0                   ?0                  	;0
43  30   GOTO/253                  ?0        ?1                   ?35                 	;0
44  33   ECHO/40                   ?0        36:'>Last Hour</option>
								</select>
							</div>
							<div class="col-md-2">
								<select id="show_entries" class="form-control" data-toggle="select2">
									' ?0                  	;0
45  34   FE_RESET_R/77             $31=      37:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?61                 	;0
46  34   FE_FETCH_R/78             ?0        $31                  16?3                	;61	>>61	<<60
47  35   ECHO/40                   ?0        38:'									<option' ?0                  	;0
48  36   FETCH_DIM_R/81            $32=      16?4                 39:'default_entries'	;0
49  36   IS_EQUAL/17               #33=      $32                  16?3                	;0
50  36   BOOL_NOT/13               #34=      #33                  ?0                  	;0
51  36   JMPZ/43                   ?0        #34                  ?54                 	;0	>>54
52  37   NOP/0                     ?0        ?0                   ?0                  	;1
53  37   GOTO/253                  ?0        ?55                  ?40                 	;0
54  39   ECHO/40                   ?0        41:' selected'       ?0                  	;0	<<51
55  41   ECHO/40                   ?0        42:' value="'        ?0                  	;0
56  42   ECHO/40                   ?0        16?3                 ?0                  	;0
57  43   ECHO/40                   ?0        43:'">'              ?0                  	;0
58  44   ECHO/40                   ?0        16?3                 ?0                  	;0
59  45   ECHO/40                   ?0        44:'</option>
									' ?0                  	;0
60  46   JMP/42                    ?0        ?46                  ?0                  	;0	>>46
61  46   FE_FREE/127               ?0        $31                  ?0                  	;0	<<45
62  49   ECHO/40                   ?0        45:'								</select>
							</div>
						</div>
						<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">User ID</th>
									<th>Username</th>
									<th class="text-center">IP Count</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
                                ' ?0                  	;0
63  50   GOTO/253                  ?0        ?90                  ?46                 	;0
64  52   FETCH_IS/89               $35=      47:'_SERVER'         ?0                  	;0
65  52   ISSET_ISEMPTY_DIM_OBJ/115 #36=      $35                  48:'HTTP_X_REQUESTED_WITH'	;16777216
66  52   BOOL_NOT/13               #37=      #36                  ?0                  	;0
67  52   JMPZ_EX/46                #37=      #37                  ?75                 	;0	>>75
68  52   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'strtolower'     	;1
69  52   FETCH_FUNC_ARG/92         $38=      51:'_SERVER'         ?0                  	;1
70  52   FETCH_DIM_FUNC_ARG/93     $39=      $38                  52:'HTTP_X_REQUESTED_WITH'	;1
71  52   SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
72  52   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
73  52   IS_EQUAL/17               #41=      $40                  53:'xmlhttprequest' 	;0
74  52   BOOL/52                   #37=      #41                  ?0                  	;0
75  52   BOOL_NOT/13               #42=      #37                  ?0                  	;0	<<67
76  52   JMPZ/43                   ?0        #42                  ?78                 	;0	>>78
77  53   GOTO/253                  ?0        ?79                  ?54                 	;0
78  55   ECHO/40                   ?0        55:' style="display: none;"' ?0                  	;0	<<76
79  57   ECHO/40                   ?0        56:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
80  58   INCLUDE_OR_EVAL/73        ?33       57:'topbar.php'      ?0                  	;2
81  59   GOTO/253                  ?0        ?183                 ?58                 	;0
82  61   ECHO/40                   ?0        59:' selected'       ?0                  	;0
83  63   ECHO/40                   ?0        60:'>Last 24 Hours</option>
									<option value="3600"' ?0                  	;0
84  64   IS_EQUAL/17               #44=      16?0                 61:3600             	;0
85  64   BOOL_NOT/13               #45=      #44                  ?0                  	;0
86  64   JMPZ/43                   ?0        #45                  ?88                 	;0	>>88
87  65   GOTO/253                  ?0        ?44                  ?62                 	;0
88  67   ECHO/40                   ?0        63:' selected'       ?0                  	;0	<<86
89  68   GOTO/253                  ?0        ?44                  ?64                 	;0
90  70   FETCH_DIM_R/81            $46=      16?1                 16?0                	;0
91  70   FE_RESET_R/77             $47=      $46                  ?180                	;0
92  70   FE_FETCH_R/78             ?0        $47                  16?5                	;180	>>180	<<179
93  71   NOP/0                     ?0        ?0                   ?0                  	;1
94  71   GOTO/253                  ?0        ?126                 ?65                 	;0
95  73   FETCH_DIM_R/81            $48=      16?5                 66:'user_id'        	;0
96  73   CONCAT/8                  #49=      67:'<a href="line_activity?user_id=' $48                 	;0
97  73   CONCAT/8                  #50=      #49                  68:'"><button type="button" class="btn btn-light waves-effect waves-light btn-xs">View Logs</button></a>'	;0
98  73   ASSIGN/38                 ?41       16?6                 #50                 	;0
99  75   INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'E589a4bF54a2dAD1'	;2
100 75   SEND_VAL_EX/116           ?80       71:'adv'             ?1                  	;0
101 75   SEND_VAL_EX/116           ?96       72:'edit_user'       ?2                  	;0
102 75   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
103 75   JMPZ/43                   ?0        $52                  ?106                	;0	>>106
104 76   NOP/0                     ?0        ?0                   ?0                  	;1
105 76   GOTO/253                  ?0        ?163                 ?73                 	;0
106 78   FETCH_DIM_R/81            $53=      16?5                 74:'user_id'        	;0	<<103
107 78   ASSIGN/38                 ?44       16?7                 $53                 	;0
108 79   FETCH_DIM_R/81            $55=      16?5                 75:'username'       	;0
109 79   ASSIGN/38                 ?46       16?8                 $55                 	;0
110 80   NOP/0                     ?0        ?0                   ?0                  	;1
111 80   GOTO/253                  ?0        ?161                 ?76                 	;0
112 82   ECHO/40                   ?0        77:'                                    <tr>
                                        <td class="text-center">' ?0                  	;0
113 83   ECHO/40                   ?0        16?7                 ?0                  	;0
114 84   ECHO/40                   ?0        78:'</td>
                                        <td>' ?0                  	;0
115 85   ECHO/40                   ?0        16?8                 ?0                  	;0
116 86   ECHO/40                   ?0        79:'</td>
                                        <td class="text-center">' ?0                  	;0
117 87   NOP/0                     ?0        ?0                   ?0                  	;1
118 87   GOTO/253                  ?0        ?119                 ?80                 	;0
119 89   FETCH_DIM_R/81            $57=      16?5                 81:'ip_count'       	;0
120 89   ECHO/40                   ?0        $57                  ?0                  	;0
121 90   ECHO/40                   ?0        82:'</td>
                                        <td class="text-center">' ?0                  	;0
122 91   ECHO/40                   ?0        16?6                 ?0                  	;0
123 92   ECHO/40                   ?0        83:'</td>
                                    </tr>
                                ' ?0                  	;0
124 94   NOP/0                     ?0        ?0                   ?0                  	;1
125 94   GOTO/253                  ?0        ?179                 ?84                 	;0
126 96   IS_EQUAL/17               #58=      16?0                 85:0                	;0
127 96   JMPZ/43                   ?0        #58                  ?130                	;0	>>130
128 97   NOP/0                     ?0        ?0                   ?0                  	;1
129 97   GOTO/253                  ?0        ?159                 ?86                 	;0
130 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'date'           	;2	<<127
131 99   FETCH_DIM_FUNC_ARG/93     $59=      16?4                 89:'date_format'    	;1
132 99   SEND_VAR_EX/66            ?80       $59                  ?1                  	;0
133 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'time'           	;0
134 99   DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
135 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'intval'         	;1
136 99   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
137 99   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
138 99   SUB/2                     #62=      $60                  $61                 	;0
139 99   SEND_VAL_EX/116           ?96       #62                  ?2                  	;0
140 99   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
141 99   CONCAT/8                  #64=      $63                  94:' - '            	;0
142 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   95:'date'           	;2
143 99   FETCH_DIM_FUNC_ARG/93     $65=      16?4                 97:'date_format'    	;1
144 99   SEND_VAR_EX/66            ?80       $65                  ?1                  	;0
145 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'time'           	;0
146 99   DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
147 99   SEND_VAR_NO_REF_EX/50     ?96       $66                  ?2                  	;0
148 99   DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
149 99   CONCAT/8                  #68=      #64                  $67                 	;0
150 99   ASSIGN/38                 ?59       16?9                 #68                 	;0
151 100  FETCH_DIM_R/81            $70=      16?5                 100:'user_id'       	;0
152 100  CONCAT/8                  #71=      101:'<a href="line_activity?user_id=' $70                 	;0
153 100  CONCAT/8                  #72=      #71                  102:'&range='       	;0
154 100  CONCAT/8                  #73=      #72                  16?9                	;0
155 100  CONCAT/8                  #74=      #73                  103:'"><button type="button" class="btn btn-light waves-effect waves-light btn-xs">View Logs</button></a>'	;0
156 100  ASSIGN/38                 ?65       16?6                 #74                 	;0
157 101  NOP/0                     ?0        ?0                   ?0                  	;1
158 101  GOTO/253                  ?0        ?99                  ?104                	;0
159 103  NOP/0                     ?0        ?0                   ?0                  	;1
160 103  GOTO/253                  ?0        ?95                  ?105                	;0
161 105  NOP/0                     ?0        ?0                   ?0                  	;1
162 105  GOTO/253                  ?0        ?177                 ?106                	;0
163 107  FETCH_DIM_R/81            $76=      16?5                 107:'user_id'       	;0
164 107  CONCAT/8                  #77=      108:'<a href=\'line?id=' $76                 	;0
165 107  CONCAT/8                  #78=      #77                  109:'\'>'           	;0
166 107  FETCH_DIM_R/81            $79=      16?5                 110:'user_id'       	;0
167 107  CONCAT/8                  #80=      #78                  $79                 	;0
168 107  CONCAT/8                  #81=      #80                  111:'</a>'          	;0
169 107  ASSIGN/38                 ?72       16?7                 #81                 	;0
170 108  FETCH_DIM_R/81            $83=      16?5                 112:'user_id'       	;0
171 108  CONCAT/8                  #84=      113:'<a href=\'line?id=' $83                 	;0
172 108  CONCAT/8                  #85=      #84                  114:'\'>'           	;0
173 108  FETCH_DIM_R/81            $86=      16?5                 115:'username'      	;0
174 108  CONCAT/8                  #87=      #85                  $86                 	;0
175 108  CONCAT/8                  #88=      #87                  116:'</a>'          	;0
176 108  ASSIGN/38                 ?79       16?8                 #88                 	;0
177 110  NOP/0                     ?0        ?0                   ?0                  	;1
178 110  GOTO/253                  ?0        ?112                 ?117                	;0
179 111  JMP/42                    ?0        ?92                  ?0                  	;0	>>92
180 111  FE_FREE/127               ?0        $47                  ?0                  	;0	<<91
181 114  ECHO/40                   ?0        118:'                            </tbody>
						</table>
					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
182 115  GOTO/253                  ?0        ?191                 ?119                	;0
183 117  ECHO/40                   ?0        120:'					</div>
					<h4 class="page-title">Line IP Usage</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<div class="form-group row mb-4">
							<div class="col-md-7">
								<input type="text" class="form-control" id="log_search" value="" placeholder="Search Logs...">
							</div>
							<div class="col-md-3">
								<select id="range" class="form-control" data-toggle="select2">
                                    <option value="0"' ?0                  	;0
184 118  IS_EQUAL/17               #90=      16?0                 121:0               	;0
185 118  BOOL_NOT/13               #91=      #90                  ?0                  	;0
186 118  JMPZ/43                   ?0        #91                  ?188                	;0	>>188
187 119  GOTO/253                  ?0        ?189                 ?122                	;0
188 121  ECHO/40                   ?0        123:' selected'      ?0                  	;0	<<186
189 123  ECHO/40                   ?0        124:'>All Time</option>
									<option value="604800"' ?0                  	;0
190 124  GOTO/253                  ?0        ?24                  ?125                	;0
191 126  INCLUDE_OR_EVAL/73        ?82       126:'footer.php'     ?0                  	;2
192 127  NOP/0                     ?0        127:1                ?0                  	;4294967295
*/

?>