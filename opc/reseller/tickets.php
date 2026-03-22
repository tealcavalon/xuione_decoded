<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?103                 ?0                  	;0	>>103
1   5    ECHO/40                   ?0        1:'					</div>
					<h4 class="page-title">Tickets</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card-box">
					<table class="table table-striped table-borderless dt-responsive nowrap w-100" id="tickets-table">
						<thead>
							<tr>
								<th class="text-center">ID</th>
								<th>Reseller</th>
								<th>Subject</th>
								<th class="text-center">Status</th>
								<th class="text-center">Created Date</th>
								<th class="text-center">Last Reply</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							' ?0                  	;0
2   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'A58fdB6C7fC6fEB0'	;1
3   6    FETCH_DIM_FUNC_ARG/93     $5=       16?1                 4:'id'              	;1
4   6    SEND_VAR_EX/66            ?80       $5                   ?1                  	;0
5   6    DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
6   6    ASSIGN/38                 ?2        16?0                 $6                  	;0
7   7    FE_RESET_R/77             $8=       16?0                 ?100                	;0
8   7    FE_FETCH_R/78             ?0        $8                   16?2                	;100	>>100	<<99
9   8    NOP/0                     ?0        ?0                   ?0                  	;1
10  8    GOTO/253                  ?0        ?37                  ?5                  	;0
11  10   INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'intval'          	;1
12  10   FETCH_DIM_FUNC_ARG/93     $9=       16?2                 8:'id'              	;1
13  10   SEND_VAR_EX/66            ?80       $9                   ?1                  	;0
14  10   DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
15  10   ECHO/40                   ?0        $10                  ?0                  	;0
16  11   ECHO/40                   ?0        9:'</a></td>
								<td>' ?0                  	;0
17  12   FETCH_DIM_R/81            $11=      16?2                 10:'username'       	;0
18  12   ECHO/40                   ?0        $11                  ?0                  	;0
19  13   ECHO/40                   ?0        11:'</td>
								<td>' ?0                  	;0
20  14   FETCH_DIM_R/81            $12=      16?2                 12:'title'          	;0
21  14   ECHO/40                   ?0        $12                  ?0                  	;0
22  15   NOP/0                     ?0        ?0                   ?0                  	;1
23  15   GOTO/253                  ?0        ?73                  ?13                 	;0
24  17   FETCH_DIM_R/81            $13=      16?2                 14:'created'        	;0
25  17   ECHO/40                   ?0        $13                  ?0                  	;0
26  18   ECHO/40                   ?0        15:'</td>
								<td class="text-center">' ?0                  	;0
27  19   FETCH_DIM_R/81            $14=      16?2                 16:'last_reply'     	;0
28  19   ECHO/40                   ?0        $14                  ?0                  	;0
29  20   ECHO/40                   ?0        17:'</td>
								<td class="text-center">
									<div class="btn-group dropdown">
										<a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="./ticket_view?id=' ?0                  	;0
30  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'intval'         	;1
31  21   FETCH_DIM_FUNC_ARG/93     $15=      16?2                 20:'id'             	;1
32  21   SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
33  21   DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
34  21   ECHO/40                   ?0        $16                  ?0                  	;0
35  22   NOP/0                     ?0        ?0                   ?0                  	;1
36  22   GOTO/253                  ?0        ?52                  ?21                 	;0
37  24   ECHO/40                   ?0        22:'							<tr id="ticket-' ?0                  	;0
38  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'intval'         	;1
39  25   FETCH_DIM_FUNC_ARG/93     $17=      16?2                 25:'id'             	;1
40  25   SEND_VAR_EX/66            ?80       $17                  ?1                  	;0
41  25   DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
42  25   ECHO/40                   ?0        $18                  ?0                  	;0
43  26   ECHO/40                   ?0        26:'">
								<td class="text-center"><a href="./ticket_view?id=' ?0                  	;0
44  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'intval'         	;1
45  27   FETCH_DIM_FUNC_ARG/93     $19=      16?2                 29:'id'             	;1
46  27   SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
47  27   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
48  27   ECHO/40                   ?0        $20                  ?0                  	;0
49  28   ECHO/40                   ?0        30:'">'              ?0                  	;0
50  29   NOP/0                     ?0        ?0                   ?0                  	;1
51  29   GOTO/253                  ?0        ?11                  ?31                 	;0
52  31   ECHO/40                   ?0        32:'"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>View Ticket</a>
											' ?0                  	;0
53  32   FETCH_DIM_R/81            $21=      16?2                 33:'status'         	;0
54  32   IS_SMALLER/19             #22=      34:0                 $21                 	;0
55  32   JMPZ/43                   ?0        #22                  ?58                 	;0	>>58
56  33   NOP/0                     ?0        ?0                   ?0                  	;1
57  33   GOTO/253                  ?0        ?87                  ?35                 	;0
58  35   FETCH_DIM_R/81            $23=      16?2                 36:'member_id'      	;0	<<55
59  35   FETCH_DIM_R/81            $24=      16?1                 37:'id'             	;0
60  35   IS_NOT_EQUAL/18           #25=      $23                  $24                 	;0
61  35   BOOL_NOT/13               #26=      #25                  ?0                  	;0
62  35   JMPZ/43                   ?0        #26                  ?65                 	;0	>>65
63  36   NOP/0                     ?0        ?0                   ?0                  	;1
64  36   GOTO/253                  ?0        ?85                  ?38                 	;0
65  38   ECHO/40                   ?0        39:'											<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0	<<62
66  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'intval'         	;1
67  39   FETCH_DIM_FUNC_ARG/93     $27=      16?2                 42:'id'             	;1
68  39   SEND_VAR_EX/66            ?80       $27                  ?1                  	;0
69  39   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
70  39   ECHO/40                   ?0        $28                  ?0                  	;0
71  40   NOP/0                     ?0        ?0                   ?0                  	;1
72  40   GOTO/253                  ?0        ?84                  ?43                 	;0
73  42   ECHO/40                   ?0        44:'</td>
								<td class="text-center"><span class="badge badge-' ?0                  	;0
74  43   FETCH_DIM_R/81            $29=      16?2                 45:'status'         	;0
75  43   FETCH_DIM_R/81            $30=      46:array (
  0 => 'secondary',
  1 => 'warning',
  2 => 'success',
  3 => 'warning',
  4 => 'info',
  5 => 'purple',
  6 => 'warning',
) $29                 	;0
76  43   ECHO/40                   ?0        $30                  ?0                  	;0
77  44   ECHO/40                   ?0        47:'">'              ?0                  	;0
78  45   FETCH_DIM_R/81            $31=      16?2                 48:'status'         	;0
79  45   FETCH_DIM_R/81            $32=      16?3                 $31                 	;0
80  45   ECHO/40                   ?0        $32                  ?0                  	;0
81  46   ECHO/40                   ?0        49:'</span></td>
								<td class="text-center">' ?0                  	;0
82  47   NOP/0                     ?0        ?0                   ?0                  	;1
83  47   GOTO/253                  ?0        ?24                  ?50                 	;0
84  49   ECHO/40                   ?0        51:', \'reopen\');"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Re-Open</a>
											' ?0                  	;0
85  51   NOP/0                     ?0        ?0                   ?0                  	;1
86  51   GOTO/253                  ?0        ?96                  ?52                 	;0
87  53   ECHO/40                   ?0        53:'											<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0
88  54   NOP/0                     ?0        ?0                   ?0                  	;1
89  54   GOTO/253                  ?0        ?90                  ?54                 	;0
90  56   INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'intval'         	;1
91  56   FETCH_DIM_FUNC_ARG/93     $33=      16?2                 57:'id'             	;1
92  56   SEND_VAR_EX/66            ?80       $33                  ?1                  	;0
93  56   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
94  56   ECHO/40                   ?0        $34                  ?0                  	;0
95  57   ECHO/40                   ?0        58:', \'close\');"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
											' ?0                  	;0
96  59   ECHO/40                   ?0        59:'										</div>
									</div>
								</td>
							</tr>
							' ?0                  	;0
97  61   NOP/0                     ?0        ?0                   ?0                  	;1
98  61   GOTO/253                  ?0        ?99                  ?60                 	;0
99  62   JMP/42                    ?0        ?8                   ?0                  	;0	>>8
100 62   FE_FREE/127               ?0        $8                   ?0                  	;0	<<7
101 65   ECHO/40                   ?0        61:'						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
102 66   GOTO/253                  ?0        ?118                 ?62                 	;0
103 68   INCLUDE_OR_EVAL/73        ?30       63:'session.php'     ?0                  	;2	<<0
104 69   INCLUDE_OR_EVAL/73        ?31       64:'functions.php'   ?0                  	;2
105 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'BaF6e9Ef7775B5A9'	;0
106 70   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
107 70   JMPZ/43                   ?0        $37                  ?109                	;0	>>109
108 71   GOTO/253                  ?0        ?111                 ?67                 	;0
109 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'E72f42A93714bA87'	;0	<<107
110 73   DO_FCALL_BY_NAME/131      ?33       ?0                   ?0                  	;0
111 75   GOTO/253                  ?0        ?112                 ?70                 	;0
112 77   ASSIGN/38                 ?34       16?3                 71:array (
  0 => 'CLOSED',
  1 => 'OPEN',
  2 => 'RESPONDED TO',
  3 => 'READ BY ME',
  4 => 'NEW RESPONSE',
  5 => 'READ BY ADMIN',
  6 => 'READ BY USER',
)	;0
113 78   ASSIGN/38                 ?35       16?4                 72:'Tickets'        	;0
114 79   INCLUDE_OR_EVAL/73        ?36       73:'header.php'      ?0                  	;2
115 80   ECHO/40                   ?0        74:'<div class="wrapper">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
116 81   INCLUDE_OR_EVAL/73        ?37       75:'topbar.php'      ?0                  	;2
117 82   GOTO/253                  ?0        ?1                   ?76                 	;0
118 84   INCLUDE_OR_EVAL/73        ?38       77:'footer.php'      ?0                  	;2
119 85   NOP/0                     ?0        78:1                 ?0                  	;4294967295
*/

?>