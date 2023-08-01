IF OBJECT_ID(N'[__EFMigrationsHistory]') IS NULL
BEGIN
    CREATE TABLE [__EFMigrationsHistory] (
        [MigrationId] nvarchar(150) NOT NULL,
        [ProductVersion] nvarchar(32) NOT NULL,
        CONSTRAINT [PK___EFMigrationsHistory] PRIMARY KEY ([MigrationId])
    );
END;
GO

BEGIN TRANSACTION;
GO

CREATE TABLE [Users] (
    [Id] int NOT NULL IDENTITY,
    [Name] nvarchar(50) NOT NULL,
    [LastName] nvarchar(100) NOT NULL,
    [Email] nvarchar(max) NOT NULL,
    [Password] nvarchar(max) NOT NULL,
    [CreateBy] nvarchar(max) NOT NULL,
    [CreateAt] datetime2 NOT NULL,
    [UpdateBy] nvarchar(max) NOT NULL,
    [UpdateAt] datetime2 NULL,
    [DeleteBy] nvarchar(max) NOT NULL,
    [DeleteAt] datetime2 NULL,
    [IsDeleted] bit NOT NULL,
    CONSTRAINT [PK_Users] PRIMARY KEY ([Id])
);
GO

INSERT INTO [__EFMigrationsHistory] ([MigrationId], [ProductVersion])
VALUES (N'20221027140320_Create Users table', N'6.0.10');
GO

COMMIT;
GO

BEGIN TRANSACTION;
GO

ALTER TABLE [Users] DROP CONSTRAINT [PK_Users];
GO

EXEC sp_rename N'[Users]', N'BaseEntity';
GO

DECLARE @var0 sysname;
SELECT @var0 = [d].[name]
FROM [sys].[default_constraints] [d]
INNER JOIN [sys].[columns] [c] ON [d].[parent_column_id] = [c].[column_id] AND [d].[parent_object_id] = [c].[object_id]
WHERE ([d].[parent_object_id] = OBJECT_ID(N'[BaseEntity]') AND [c].[name] = N'Password');
IF @var0 IS NOT NULL EXEC(N'ALTER TABLE [BaseEntity] DROP CONSTRAINT [' + @var0 + '];');
ALTER TABLE [BaseEntity] ALTER COLUMN [Password] nvarchar(max) NULL;
GO

DECLARE @var1 sysname;
SELECT @var1 = [d].[name]
FROM [sys].[default_constraints] [d]
INNER JOIN [sys].[columns] [c] ON [d].[parent_column_id] = [c].[column_id] AND [d].[parent_object_id] = [c].[object_id]
WHERE ([d].[parent_object_id] = OBJECT_ID(N'[BaseEntity]') AND [c].[name] = N'Name');
IF @var1 IS NOT NULL EXEC(N'ALTER TABLE [BaseEntity] DROP CONSTRAINT [' + @var1 + '];');
ALTER TABLE [BaseEntity] ALTER COLUMN [Name] nvarchar(max) NULL;
GO

DECLARE @var2 sysname;
SELECT @var2 = [d].[name]
FROM [sys].[default_constraints] [d]
INNER JOIN [sys].[columns] [c] ON [d].[parent_column_id] = [c].[column_id] AND [d].[parent_object_id] = [c].[object_id]
WHERE ([d].[parent_object_id] = OBJECT_ID(N'[BaseEntity]') AND [c].[name] = N'LastName');
IF @var2 IS NOT NULL EXEC(N'ALTER TABLE [BaseEntity] DROP CONSTRAINT [' + @var2 + '];');
ALTER TABLE [BaseEntity] ALTER COLUMN [LastName] nvarchar(max) NULL;
GO

DECLARE @var3 sysname;
SELECT @var3 = [d].[name]
FROM [sys].[default_constraints] [d]
INNER JOIN [sys].[columns] [c] ON [d].[parent_column_id] = [c].[column_id] AND [d].[parent_object_id] = [c].[object_id]
WHERE ([d].[parent_object_id] = OBJECT_ID(N'[BaseEntity]') AND [c].[name] = N'Email');
IF @var3 IS NOT NULL EXEC(N'ALTER TABLE [BaseEntity] DROP CONSTRAINT [' + @var3 + '];');
ALTER TABLE [BaseEntity] ALTER COLUMN [Email] nvarchar(max) NULL;
GO

ALTER TABLE [BaseEntity] ADD [CourseId] int NULL;
GO

ALTER TABLE [BaseEntity] ADD [Course_Name] nvarchar(50) NULL;
GO

ALTER TABLE [BaseEntity] ADD [Description] nvarchar(max) NULL;
GO

ALTER TABLE [BaseEntity] ADD [Discriminator] nvarchar(max) NOT NULL DEFAULT N'';
GO

ALTER TABLE [BaseEntity] ADD [Dob] datetime2 NULL;
GO

ALTER TABLE [BaseEntity] ADD [Level] int NULL;
GO

ALTER TABLE [BaseEntity] ADD [ShortDescription] nvarchar(280) NULL;
GO

ALTER TABLE [BaseEntity] ADD [Student_Name] nvarchar(max) NULL;
GO

ALTER TABLE [BaseEntity] ADD [UserId] int NULL;
GO

ALTER TABLE [BaseEntity] ADD [User_LastName] nvarchar(100) NULL;
GO

ALTER TABLE [BaseEntity] ADD [User_Name] nvarchar(50) NULL;
GO

ALTER TABLE [BaseEntity] ADD CONSTRAINT [PK_BaseEntity] PRIMARY KEY ([Id]);
GO

CREATE TABLE [CategoryCourse] (
    [CoursesId] int NOT NULL,
    [categoriesId] int NOT NULL,
    CONSTRAINT [PK_CategoryCourse] PRIMARY KEY ([CoursesId], [categoriesId]),
    CONSTRAINT [FK_CategoryCourse_BaseEntity_categoriesId] FOREIGN KEY ([categoriesId]) REFERENCES [BaseEntity] ([Id]) ON DELETE CASCADE,
    CONSTRAINT [FK_CategoryCourse_BaseEntity_CoursesId] FOREIGN KEY ([CoursesId]) REFERENCES [BaseEntity] ([Id]) ON DELETE CASCADE
);
GO

CREATE TABLE [CourseStudent] (
    [CoursesId] int NOT NULL,
    [StudentsId] int NOT NULL,
    CONSTRAINT [PK_CourseStudent] PRIMARY KEY ([CoursesId], [StudentsId]),
    CONSTRAINT [FK_CourseStudent_BaseEntity_CoursesId] FOREIGN KEY ([CoursesId]) REFERENCES [BaseEntity] ([Id]) ON DELETE CASCADE,
    CONSTRAINT [FK_CourseStudent_BaseEntity_StudentsId] FOREIGN KEY ([StudentsId]) REFERENCES [BaseEntity] ([Id]) ON DELETE CASCADE
);
GO

CREATE UNIQUE INDEX [IX_BaseEntity_CourseId] ON [BaseEntity] ([CourseId]) WHERE [CourseId] IS NOT NULL;
GO

CREATE INDEX [IX_BaseEntity_UserId] ON [BaseEntity] ([UserId]);
GO

CREATE INDEX [IX_CategoryCourse_categoriesId] ON [CategoryCourse] ([categoriesId]);
GO

CREATE INDEX [IX_CourseStudent_StudentsId] ON [CourseStudent] ([StudentsId]);
GO

ALTER TABLE [BaseEntity] ADD CONSTRAINT [FK_BaseEntity_BaseEntity_CourseId] FOREIGN KEY ([CourseId]) REFERENCES [BaseEntity] ([Id]) ON DELETE CASCADE;
GO

ALTER TABLE [BaseEntity] ADD CONSTRAINT [FK_BaseEntity_BaseEntity_UserId] FOREIGN KEY ([UserId]) REFERENCES [BaseEntity] ([Id]);
GO

INSERT INTO [__EFMigrationsHistory] ([MigrationId], [ProductVersion])
VALUES (N'20221028151518_Update-Data', N'6.0.10');
GO

COMMIT;
GO

