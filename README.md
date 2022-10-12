# PHP-Profile

![image](https://user-images.githubusercontent.com/50046414/194237043-33db35f6-fe33-4751-9e35-5101d6a0650e.png)
![image](https://user-images.githubusercontent.com/50046414/194237400-52df2a6b-b366-427d-b21f-2597b4118c02.png)
![image](https://user-images.githubusercontent.com/50046414/194237710-88547f78-81e0-4835-9d8b-7bfcf6e20de3.png)
![image](https://user-images.githubusercontent.com/50046414/194241776-81858fba-2a54-433d-ad0c-16dcea0e042e.png)

v3
![image](https://user-images.githubusercontent.com/50046414/195370361-39597812-f3d3-47cf-b558-9335a78d2459.png)

Table and vars
CREATE TABLE [dbo].[Persons](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[Lastname] [varchar](255) NOT NULL,
	[Firstname] [varchar](255) NOT NULL,
	[Age] [int] NULL,
	[Email] [varchar](255) NULL,
	[Status] [bit] NOT NULL,
	[Musictaste] [nvarchar](50) NULL,
	[Language] [varchar](255) NULL,
	[Start_time] [datetime] NULL,
	[Password] [varchar(255) NULL,
PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
