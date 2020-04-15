
CREATE TABLE [dbo].[Test](
[uid] [int] IDENTITY(1,1) NOT NULL,  -- уникальное поле, автоинкрементное
	[pid] [int] NULL,                    -- это поле указывает на элемент уровнем выше, содержит uid родителя
	[name] [varchar](255) NULL,
	[access] [varchar](50) NULL,         -- права доступа
) ON [PRIMARY]